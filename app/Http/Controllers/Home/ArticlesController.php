<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ArticleHomeRequest;
use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use YuanChao\Editor\EndaEditor;

class ArticlesController extends Controller
{
    protected $article;

    public function __construct ( Article $article )
    {
        $this->article = $article;
    }

    public function show ( $id )
    {
        $article = $this->article->with([ 'categories' => function ( $query ) {
            $query->select('categories.id', 'category');
        } ])->find($id, [ 'id', 'title', 'content', 'click_amount' ]);

        if ( !$article ) abort(404);
        $article->increment('click_amount');

        $content = EndaEditor::MarkDecode($article->content);

        return view('home.article.info', compact('article', 'content'));
    }

    public function category ( $name )
    {
        $articles = $this->article->showAllArticles()->get();
        $articles = $articles->filter(function ( $article, $key ) use ( $name ) {
            foreach ( $article->categories as $category ) {
                if ( $category->category === $name ) return true;
            }
            return false;
        });

        return view('home.index.index', compact('articles'));
    }

    public function toggle ( ArticleHomeRequest $request, $id )
    {
        $active = $request->get('active').'Users';
        $active = $this->article->find($id, [ 'id' ])->$active()->toggle(\Auth::id());
        $active = !empty($active[ 'attached' ]);

        return $this->sendSuccessResponse($active);
    }
}
