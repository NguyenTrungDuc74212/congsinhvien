 @extends('trangchu_layout')
 @section('content')
 <!-- Home -->

 <div class="home" style="height: 150px;">
 	<div class="breadcrumbs_container">
 		<div class="container">
 			<div class="row">
 				<div class="col">
 					<div class="breadcrumbs">
 						<ul>
 							<li><a href="{{ route('home_post') }}">Trang chủ</a></li>
 							<li>{{ $category_bread->ten_loai_tin_tuc }}</li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>			
 </div>

 <!-- Blog -->

 <div class="blog">
 	<div class="container">
 		<div class="row">
 		@foreach ($post as $value)
 			<div class="col-lg-4">
 				<div class="blog_post_container">
 					<!-- Blog Post -->
 				
 					<div class="blog_post trans_200" style="width: 350px;height: 550px;">
 						<div class="blog_post_image"><img src="{{ asset('public/images/upload/'.$value->anh) }}" width="100%" height="250px"> 
 						</div>
 						<div class="blog_post_body">
 							<div class="blog_post_title"><a href="{{ route('post_detail',$value->id) }}">{{ $value->tieude }}</a></div>
 							<div class="blog_post_meta">
 								<ul>
 									<li><a href="#">admin</a></li>
 									<li><a href="#">{{ $value->ngayviet }}</a></li>
 								</ul>
 							</div>
 							<div class="blog_post_text">
 								<p>{{ $value->mota }}</p>
 							</div>
 						</div>
 					</div>
 					
 				</div>
 			</div>
 			@endforeach
 		</div>
 		<div class="phantrang">
 			{{ $post->appends(request()->all())}}
 		</div>

 	</div>
 </div>
 @stop