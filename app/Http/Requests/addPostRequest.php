<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'loaitintuc'=>'required',
            'tieude'=>'required',
            'mota'=>'required',
            'noidung'=>'required',
            'anh'=>'required',
            'nguon'=>'required',

        ];
    }
    public function messages()
    { 
        return[
         'loaitintuc.required'=>'danh mục không được bỏ trống',
         'tieude.required'=>'tiêu đề không được bỏ trống',
         'mota.required'=>'mô tả không được bỏ trống',
         'anh.required'=>'ảnh không được bỏ trống',
         'nguon.required'=>'Nguồn không được bỏ trống',
         'noidung.required'=>'Nội dung không được bỏ trống'
        ];
    }
}
