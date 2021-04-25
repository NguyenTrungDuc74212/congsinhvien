<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editStudentRequest extends FormRequest
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
        'name'=>'required',
        "msv"=>"required|numeric",
        'birthday'=>'required',
        'class'=>'required',
        "email"=>"required",
        'password'=>'required',
        'gender'=>'required|numeric|in:1,2',
      ];
    }
    public function messages()
    { 
      return[
       'name.required'=>'Tên sinh viên không được bỏ trống',
       'class.required'=>'lớp không được bỏ trống',
       'password.required'=>'password không được bỏ trống',
       'email.required'=>'nội dung không được bỏ trống',
       'msv.required'=>'msv không được bỏ trống',
       'msv.numeric'=>'msv không hợp lệ',
       'birthday.required'=>'ngày sinh không được bỏ trống',
       'gender.required'=>'trạng thái không hợp lệ',
       'gender.numeric'=>'trạng thái không hợp lệ',

     ];
   }
}
