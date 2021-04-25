<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addScoreRequest extends FormRequest
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
            'student_id'=>'required',
            'hocphan'=>'required',
            'tinchi'=>'required|numeric',
            'diemx'=>'required|numeric',
            'diemy'=>'required|numeric',
            'diemz'=>'required|numeric',
            'diemchu'=>'required',

        ];
    }
    public function messages()
    { 
        return[
         'student_id.required'=>'mã sinh viên không được bỏ trống',
         'hocphan.required'=>'Học phần không được bỏ trống',
         'tinchi.required'=>'Tín chỉ không được bỏ trống',
         'tinchi.numeric'=>'Tín chỉ không hợp lệ',
         'diemx.numeric'=>'Điểm X không hợp lệ',
         'diemx.required'=>'Điểm X không được bỏ trống',
         'diemy.required'=>'Điểm Y không được bỏ trống',
         'diemy.numeric'=>'Điểm Y không hợp lệ',
         'diemz.required'=>'Điểm Z không được bỏ trống',
         'diemz.numeric'=>'Điểm Z không hợp lệ',
         'diemchu.required'=>'Điểm chữ không được bỏ trống',
      
        ];
    }
}
