<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CategoryPost;
use App\Http\Requests\addPostRequest;
use Carbon\Carbon;
use App\Http\Requests\editPostRequest;
use Auth;

class PostController extends Controller
{
	/*front end trangtintuc*/
  public function home_post(Request $req)
  {
   $post_query = Post::query();
   $post_query->orderby('id','DESC');
   $post_new = $post_query->limit(3)->where('maloaitintuc',1)->get();

   $post_query2 = Post::query();
   $post_query2->orderby('id','DESC');
   $post_function = $post_query2->limit(3)->where('maloaitintuc',3)->get();

   $category_query = CategoryPost::query();
   $category_query->orderby('id','DESC');
   $category = $category_query->get();

   return view('trangchu_tintuc.home',compact('post_new','category','post_function'));
 }
 public function recommend(){
   $category_query = CategoryPost::query();
   $category_query->orderby('id','DESC');
   $category = $category_query->get();
   return view('trangchu_tintuc.recommend',compact('category'));
 }
 public function contact(){
   $category_query = CategoryPost::query();
   $category_query->orderby('id','DESC');
   $category = $category_query->get();
   return view('trangchu_tintuc.contact',compact('category'));
 }
 public function post($id)
 {
   $post = Post::where('maloaitintuc',$id)->paginate(6);

   $category_query = CategoryPost::query();
   $category_query->orderby('id','DESC');
   $category = $category_query->get();

   $category_bread = CategoryPost::find($id);

   return view('trangchu_tintuc.post',compact('post','category','category_bread'));
 }
 public function post_detail($id,Request $req){
  $post = Post::find($id);

  $category_query = CategoryPost::query();
  $category_query->orderby('id','DESC');
  $category = $category_query->get();

  $category_id = $post->maloaitintuc;
  $post_related = Post::where('maloaitintuc',$category_id)->get();



  return view('trangchu_tintuc.post_detail',compact('post','category','post_related'));
}
/*end front_end*/

/*back-end trang trin tức*/
public function list_post(Request $req){
  $post = Post::all();
  return view('admin.post.list_post',compact('post'));
}
public function add_post(Request $req){
  $category = CategoryPost::all();
  return view('admin.post.add_post',compact('category'));
}
public function insert_post(addPostRequest $req)
{
  $post = new Post;
  $post->manguoidung = Auth::user()->id;
  $post->tieude = $req->input('tieude');
  $post->maloaitintuc = $req->input('loaitintuc');
  $post->mota = $req->input('mota');
  $post->noidung = $req->input('noidung');
  $post->nguon = $req->input('nguon');
  $post->ngayviet = Carbon::now()->toDateTimeString();

  $file = $req->file('anh');
  $name_offical = $file->getClientOriginalName();
  $name_jpg = explode(".", $name_offical);
  $file_name =$name_jpg[0].rand(0,99).".".$file->getClientOriginalExtension();
  $url = $file->move('public/images/upload',$file_name);
  $post->anh = $file_name;
  $post->save();

  return redirect()->route('list_post')->with('thanhcong','Thêm bài viết thành công');

}
public function delete_post($id)
{
  $post = Post::find($id);
  $post->delete();
  return redirect()->route('list_post')->with('thanhcong','Xóa bài viết thành công');
}
public function edit_post($id)
{
 $post = Post::find($id);
 $category = CategoryPost::all();
 return view('admin.post.edit_post',compact('post','category'));
}
public function save_edit_post($id, editPostRequest $req)
{
  $post = Post::find($id);
  $post->manguoidung = Auth::user()->id;
  $post->tieude = $req->input('tieude');
  $post->maloaitintuc = $req->input('loaitintuc');
  $post->mota = $req->input('mota');
  $post->noidung = $req->input('noidung');
  $post->nguon = $req->input('nguon');
  $post->ngayviet = Carbon::now()->toDateTimeString();
  $file = $req->file('anh');
  if ($file) {
    $name_offical = $file->getClientOriginalName();
    $name_jpg = explode(".", $name_offical);
    $file_name =$name_jpg[0].rand(0,99).".".$file->getClientOriginalExtension();
    $url = $file->move('public/images/upload',$file_name);
    $post->anh = $file_name;
  }
  else {
    $post->anh = $req->input('img_old');
  }
  $post->save();
  return redirect()->route('list_post')->with('thanhcong','Sửa bài viết thành công');


}
/*end back-end*/
}
