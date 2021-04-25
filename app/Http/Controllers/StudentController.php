<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addStudentRequest;
use App\Http\Requests\editStudentRequest;
use App\Models\Student;
use App\Models\Score;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Session;

class StudentController extends Controller
{
	/*front-end*/
  public function login_student()
  {
    return view('congsinhvien.login_student');
  }
  public function check_login(Request $req){ 
    $student = new Student;
    $email = $req->input('email');
    $password = $req->input('password');
    $kq = $student->where('email',$email)->first();
    if (!$kq) {
      return redirect()->back()->with('thongbao','Đăng nhập thất bại');
    }
    if (Hash::check($password, $kq->password)) {
      Session::put('name_student',$kq->name);
      Session::put('id_student',$kq->id);
      return redirect()->route('dashboard_student');
    }
    return redirect()->back()->with('thongbao','Đăng nhập thất bại');
  }
  public function logout(Request $req){
    $req->session()->forget('name_student');
    $req->session()->forget('id_student');
     return redirect()->route('login_student');
  }
  public function dashboard_student()
  {
    $post_highlights = Post::where('maloaitintuc',1)->get();
    $post = Post::where('maloaitintuc',2)->get();
    return view('congsinhvien.dashboard_sv',compact('post_highlights','post'));
  }
  public function bangdiem(Request $req){
     $student_id = Session::get('id_student');
     $student = Student::where('id',$student_id)->first();
     $score = Score::where('student_id',$student_id)->get();
     return view('congsinhvien.bangdiem',compact('student','score'));
  }
  /*end front-end*/

  public function list_student(){
    $student = Student::all();
    return view('admin.sinhvien.list_sinhvien',compact('student'));
  }
  public function add_student_view(){
   return view('admin.sinhvien.add_sinhvien');
 }
 public function save_student(addStudentRequest $req)
 {
   $student = new Student;
   $student->msv = $req->input('msv');
   $student->gender = $req->input('gender');
   $student->name = $req->input('name');
   $student->birthday = $req->input('birthday');
   $student->email = $req->input('email');
   $student->password = bcrypt($req->input('password'));
   $student->class = $req->input('class');
   $student->save();

   return redirect()->route('list_student')->with('thanhcong','Thêm thành công sinh viên');
 }
 public function delete_student($id){
  $student = Student::find($id);
  $student->delete();
  return redirect()->route('list_student')->with('thanhcong','Xóa thành công sinh viên');
}
public function edit_student($id)
{
  $student = Student::find($id);
  return view('admin.sinhvien.edit_sinhvien',compact('student'));
}
public function save_edit_student($id,editStudentRequest $req){
 $student = Student::find($id);
 $student->msv = $req->input('msv');
 $student->gender = $req->input('gender');
 $student->name = $req->input('name');
 $student->birthday = $req->input('birthday');
 $student->email = $req->input('email');
 $student->password = $req->input('password');
 $student->class = $req->input('class');
 $student->save();

 return redirect()->route('list_student')->with('thanhcong','Thêm thành công sinh viên');
}
}
