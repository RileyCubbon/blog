<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $update = [
            'work'        => 'max:15|string',
            'url'         => 'max:40|url',
            'description' => 'max:90|string|nullable'
        ];

        return $update;
    }

    public function messages ()
    {
        $update = [
            'work.max'           => '职业长度最大为15位字符',
            'work.string'        => '无效参数',
            'url.max'            => '您的github地址有点太长了',
            'url.url'            => '请填写一个正确的url',
            'description.max'    => '个人简介长度最大为90个字符',
            'description.string' => '无效参数',
        ];

        return $update;
    }
}
