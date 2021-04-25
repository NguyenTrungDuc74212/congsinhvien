<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Student;
use App\Http\Requests\addScoreRequest;

class scoreController extends Controller
{
    public function list_score()
    {
    	$score = Score::all();
    	return view('admin.diemthi.list_score',compact('score'));
    }
    public function add_score_view(){
    	$student = Student::all();
       return view('admin.diemthi.add_score',compact('student'));
    }
    public function save_score(addScoreRequest $req)
    {
    	$student = new Score;
    	$student->student_id = $req->input('student_id');
    	$student->hocphan = $req->input('hocphan');
    	$student->tinchi = $req->input('tinchi');
    	$student->diemx = $req->input('diemx');
    	$student->diemy = $req->input('diemy');
    	$student->diemz = $req->input('diemz');
    	$student->diemchu = $req->input('diemchu');
    	$student->save();

    	return redirect()->route('list_score')->with('thanhcong','Thêm điểm thành công!!!');
    }
    public function delete_score($id){
    	$score = Score::find($id);
    	$score->delete();
    	return redirect()->route('list_score')->with('thanhcong','Xoá điểm thành công!!!');
    }
}
