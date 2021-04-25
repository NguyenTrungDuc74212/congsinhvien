<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost;
use App\Http\Requests\addCategoryPost;
use App\Http\Requests\editCategoryPost;

class CategoryController extends Controller
{
	public function list_category_post(Request $req){
		$category_query = CategoryPost::query();
		$category_query->orderby('id','DESC');
		$category = $category_query->get();
		return view('admin.category_post.list_category',compact('category'));
	}
	public function add_post_view(Request $req)
	{
		return view('admin.category_post.add_category');
	}
	public function save_post(addCategoryPost $req){
		$category = new CategoryPost;
		$category->ten_loai_tin_tuc = $req->input('ten_loai_tin_tuc');
		$category->save();
		return redirect()->route('list_category_post')->with('thanhcong','Thêm danh mục thành công');
	}
	public function delete_category_post($id)
	{
		$category_post = CategoryPost::find($id);
		$category_post->delete();
		return redirect()->back()->with('thanhcong','Xóa thành công');
	}
	public function edit_post_view($id){
         $category_post = CategoryPost::find($id);
		return view('admin.category_post.edit_category',compact('category_post'));
	}
	public function save_edit_post($id,editCategoryPost $req){
		$category_post = CategoryPost::find($id);
		$category_post->ten_loai_tin_tuc = $req->input('ten_loai_tin_tuc');
		$category_post->save();
		return redirect()->route('list_category_post')->with('thanhcong','Sửa danh mục thành công');
		
	}
}
