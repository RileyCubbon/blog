<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    protected $category;

    public function __construct ( Category $category )
    {
        $this->category = $category;
    }

    public function index ()
    {
        $categories = $this->category->all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function store ( Request $request )
    {
        $this->validateStore($request);
        $data     = array_merge(
            $request->only('category'),
            [ 'admin_name' => \Auth::guard('admin')->user()->name ]
        );
        $category = $this->category->create($data);

        return $this->sendSuccessResponse('添加分类成功', $category);
    }

    public function destroy ( $id )
    {
        $category = $this->category->find($id);
        if ( !$category->status ) {
            return $this->sendFailedResponse('分类'.$category->category.'当前状态为已停用');
        }

        $category->update([ 'status' => 0 ]);

        return $this->sendSuccessResponse('分类'.$category->category. '已停用');
    }

    public function update ( $id )
    {
        $category = $this->category->find($id);
        if ( $category->status ) {
            return $this->sendFailedResponse('分类'.$category->category.'当前状态为已启用');
        }

        $category->update([ 'status' => 1 ]);

        return $this->sendSuccessResponse('分类'.$category->category.'已启用');
    }

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
