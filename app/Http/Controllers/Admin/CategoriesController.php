<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CategoriesController
 * @package App\Http\Controllers\Admin
 */
class CategoriesController extends Controller
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * CategoriesController constructor.
     *
     * @param Category $category
     */
    public function __construct ( Category $category )
    {
        $this->category = $category;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $categories = $this->category->withCount('articles')
            ->get([ 'categories.id', 'category', 'status', 'created_at', 'admin_name' ]);

        return view('admin.categories.categories', compact('categories'));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store ( Request $request )
    {
        $this->validateStore($request);
        $data = array_merge(
            $request->only('category'),
            [ 'admin_name' => \Auth::guard('admin')->user()->name ]
        );

        $category = $this->category->create($data);

        return $this->sendSuccessResponse('添加分类成功', $category);
    }

    /**
     * 切换分类状态，停用或者启用
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy ( $id )
    {
        $category = $this->category->find($id, [ 'id', 'category', 'status' ]);

        $category->status = !$category->status;
        $category->save();
        $message = array_merge($category->only('status'), [ 'title' => $category->category ]);

        return $this->sendSuccessResponse($message);
    }

    /**
     * @param Request $request
     */
    protected function validateStore ( Request $request )
    {
        $this->validate($request,
            [ 'category' => 'required|string|max:10', ],
            [
                'category.required' => '请填写分类名称',
                'category.string'   => '分类名称中不能出现特殊符号',
                'category.max'      => '分类名称长度不能超过10位',
            ]
        );
    }
}
