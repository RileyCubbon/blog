<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinksRequest extends FormRequest
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
        $create = [
            'title'       => 'required|max:20',
            'url'         => 'required|max:50|url',
            'description' => 'required|max:30',
        ];

        return $create;
    }

    public function messages ()
    {
        $create = [
            'title.required'       => '友链标题为必填项',
            'title.max'            => '友链标题长度最大为20位',
            'url.required'         => '友链地址为必填项',
            'url.max'              => '友链地址长度最大为50位',
            'url.url'              => '友链地址必须是一个url',
            'description.required' => '友链描述为必填项',
            'description.max'      => '友链描述长度最大为30位',
        ];

        return $create;
    }
}
