<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleSubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        $this->method = request()->method();

        $create  = [
            'title'        => 'required|max:40',
            'categories'   => 'required|array',
            'categories.*' => 'numeric',
            'description'  => 'required|max:100',
            'content'      => 'required'
        ];
        $destroy = [ 'action' => 'required|alpha_dash' ];

        switch ( $this->method ) {
            case 'PUT':
            case 'POST':
                return $create;
            case 'DELETE':
                return $destroy;
        }
    }

    public function messages ()
    {
        $create  = [
            'title.required'       => '文章标题不能为空',
            'title.max'            => '标题长度最长不能超过40位字符',
            'categories.required'  => '标签为必选项',
            'categories.array'     => '标签格式错误',
            'categories.*.numeric' => '标签格式错误',
            'description.required' => '文章描述不能为空',
            'description.max'      => '文章描述不能超过100个字符',
            'content.required'     => '文章内容不能为空',
        ];
        $destroy = [ 'action.*' => '非法操作' ];

        switch ( $this->method ) {
            case 'PUT':
            case 'POST':
                return $create;
            case 'DELETE':
                return $destroy;
        }
    }
}
