<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addCategoryPost extends FormRequest
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
            'ten_loai_tin_tuc'=>'required',
        ];
    }
    public function messages()
    { 
        return[
         'ten_loai_tin_tuc.required'=>'Tên danh mục không được bỏ trống',
      
        ];
    }
}
