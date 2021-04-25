 @extends('trangchu_layout')
 @section('content')
 <!-- Blog -->
 <!-- Home -->

	<div class="home" style="height: 150px;">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{ route('home_post') }}">Trang chủ</a></li>
								<li><a href="tin_tuc.php">Tin tức</a></li>
								<li>Tin tức chi tiết</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

 <div class="blog">
 	<div class="container">
 		<div class="row">
 			<!-- Blog Content -->
 			<div class="col-lg-8">
 				<div class="blog_content">
 					<div class="blog_title">{{ $post->tieude }}</div>
 					<div class="blog_meta">
 						<ul>
 							<li>Post on <a href="#">{{ $post->ngayviet }}</a></li>
 							<li>By <a href="#"></a></li>
 						</ul>
 					</div>
 					<p>@php
 						echo html_entity_decode($post->mota) 
 					@endphp</p>	
 					<div class="blog_image"><img src="{{ asset('public/images/upload/'.$post->anh) }}" width="650px" height="auto"></div><br>
 					<br>
 					<p>{{ $post->ghichu }}</p>
 					<p>@php
 						echo html_entity_decode($post->noidung) 
 					@endphp</p>

 				</div>

 				<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">						
 					<div class="blog_social ml-lg-auto">
 						<span>Share: </span>
 						<ul>
 							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
 							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
 							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
 							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
 							<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
 						</ul>
 					</div>
 				</div>



 			</div> 
 			<!-- Blog Sidebar -->
 			<div class="col-lg-4">

 				<div class="sidebar">
 					<!-- Latest News -->
 					<div style="width: 380px;" class="sidebar_section">
 						<div class="sidebar_section_title">Tin tức mới nhất</div>
 						<div class="sidebar_latest">
 							@foreach ($post_related as $value)

 							<div style="height: 120px;" class="latest d-flex flex-row align-items-start justify-content-start">
 								<div class="latest_image"><div style="width: 140px; height: 110px;"><img src="{{asset('public/images/upload/'.$value->anh)  }}"></div>
 							</div>
 							<div class="latest_content">
 								<div class="latest_title"><a href="{{ route('post_detail',$value->id) }}">{!! $value->tieude !!}</a></div>
 								<div class="latest_date">{{ $value->ngayviet }}</div>
 							</div>
 						</div>


 		 			 				 @endforeach
 					</div>							
 				</div>

 			</div>

 		</div>
 	</div>
 </div>
</div>
@stop