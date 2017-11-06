<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleSubmitRequest;
use App\Model\Article;
use App\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use YuanChao\Editor\EndaEditor;

/**
 * Class ArticlesController
 * @package App\Http\Controllers\Admin
 */
class ArticlesController extends Controller
{
    /**
     * @var Category
     */
    protected $category;
    /**
     * @var Article
     */
    protected $article;

    /**
     * ArticlesController constructor.
     *
     * @param Category $category
     * @param Article  $article
     */
    public function __construct ( Category $category, Article $article )
    {
        $this->category = $category;
        $this->article  = $article;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $articles = $this->getQuery()->paginate(15);

        return view('admin.articles.articles', compact('articles'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        $categories = $this->category->where('status', 1)->get([ 'id', 'category' ]);

        return view('admin.articles.create', compact('categories'));
    }

    /**
     * @param ArticleSubmitRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store ( ArticleSubmitRequest $request )
    {
        $data    = array_merge(
            $request->all('title', 'description', 'content'),
            [ 'admin_id' => \Auth::guard('admin')->user()->id ]
        );
        $article = $this->article->create($data);
        //添加表间关系
        $article->categories()->attach($request->get('categories'));

        return $this->sendSuccessResponse(route('articles.show', $article->id));
    }

    /**
     * markdown编辑器上传图片方法
     *
     * @return string
     */
    public function uploads ()
    {
        $data = EndaEditor::uploadImgFile('uploads');

        return json_encode($data);
    }

    /**
     * 根据传过来的字段名修改数据对应数据
     *
     * @param ArticleSubmitRequest $request
     * @param int                  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy ( ArticleSubmitRequest $request, $id )
    {
        $action  = $request->get('action');
        $article = $this->article->find($id, [ 'id', $action, 'title' ]);

        $article->$action = !$article->$action;
        $article->save();

        return $this->sendSuccessResponse($article->only($action, 'title'));
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit ( $id )
    {
        $categories = $this->category->where('status', 1)->get([ 'id', 'category' ]);
        $article    = $this->article->find($id, [ 'id', 'title', 'description', 'content' ]);
        $contain    = $article->categories()->get()->pluck('id')->toArray();

        return view('admin.articles.edit', compact('categories', 'article', 'contain'));
    }

    /**
     * @param ArticleSubmitRequest $request
     * @param int                  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update ( ArticleSubmitRequest $request, $id )
    {
        $data    = $request->only('title', 'description', 'content');
        $article = $this->article->find($id);

        if ( $article->update($data) ) {
            // 更新表关系
            $article->categories()->sync($request->get('categories'));
        }

        return $this->sendSuccessResponse(route('articles.index'));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search ( Request $request )
    {
        $this->validate($request, [ 'search' => 'required|alpha_dash' ]);
        \Session::flash('search', $search = $request->get('search'));
        $articles = $this->getQuery()->where('title', 'like', "%$search%")->paginate(15);

        return view('admin.articles.articles', compact('articles'));
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    protected function getQuery ()
    {
        return $this->article->with([
            'categories' => function ( $query ) {$query->where('status', 1)->select('categories.id', 'category');},
            'admin'      => function ( $query ) {$query->select('admins.id', 'name');}
        ])->select('id', 'title', 'is_show', 'click_amount', 'recommend_number', 'recommend', 'created_at', 'admin_id');
    }
}
