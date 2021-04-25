<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class adminController extends Controller
{
	public function login()
	{
       return view('admin.admin_login');
	}
	public function check_login(Request $req)
	{
		$username = $req->input('email');
		$password = $req->input('password');

		if (Auth::attempt([
			'email'=>$username,
			'password'=>$password,

		])) {
            // echo Auth::loginUsingId(Auth::id())->name;
			return redirect()->route('dashboard')->with('thongbao','đăng nhập thành công');
		}
		else {
			return redirect()->back()->with('error','Đăng nhập thất bại');
		}
	}
	public function log_out()
	{
		Auth::logout();
		return redirect()->route('login');
	}
	public function list_admin(){
		$admin = User::all();
		return view('admin.list_admin',compact('admin'));
	}
}
