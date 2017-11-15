<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleHomeRequest extends FormRequest
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
        $put = [
            'active' => 'required|in:recommend,collector'
        ];

        return $put;
    }

    public function messages (  )
    {
        $put = [
            'active.*' => '参数错误，非法请求'
        ];

        return $put;
    }
}
