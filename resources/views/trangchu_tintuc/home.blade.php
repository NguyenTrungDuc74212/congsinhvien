 @extends('trangchu_layout')
 @section('content')
<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
			
			<!-- Start php get dt -->
				
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(public/images/upload/rsz_2020_cover_05.jpg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title">
											<a style="color: #001d66;" href="{{ route('post_detail',33) }}">Hướng dẫn các bước nhập học cho tân sinh viên K61</a>
									</div>
										<div class="home_slider_subtitle">Chào mừng Quý phụ huynh và Tân sinh viên K61 đến với Mái trường Đại dương.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- End php get dt -->
				
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(public/images/upload/rsz_2020_cover_fanpage_03.jpg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title">
											<a style="color: #001d66;" href="{{ route('post_detail',30) }}">Thông tin tuyển sinh hệ Đại học chính quy năm 2021</a>
									</div>
										<div class="home_slider_subtitle">Năm 2021, Đại học Hàng hải Việt Nam tuyển sinh 47 chuyên ngành đào tạo hệ Đại học chính quy với tổng chỉ tiêu là 3600</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- End php get dt -->
				
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(public/images/upload/rsz_12020_cover_04.jpg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title">
											<a style="color: #001d66;" href="{{ route('post_detail',29) }}">5 điểm mới trong mùa tuyển sinh đại học năm 2021</a>
									</div>
										<div class="home_slider_subtitle">Trong mùa tuyển sinh năm 2021, sẽ có một số thay đổi nhằm tạo điều kiện thuận lợi cho thí sinh trong quá trình đăng ký xét tuyển, điều chỉnh nguyện vọng, đồng thời hạn chế những sai sót không đáng có:</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- End php get dt -->
								
				

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Trường Đại Học Hàng Hải <br>Việt Nam</h2>
						<div class="section_subtitle"><p>Trường Đại học Hàng hải Việt Nam là Trường trọng điểm quốc gia, đẳng cấp quốc tế đào tạo đa ngành, đa bậc học từ đào tạo nghề đến tiến sỹ, cung cấp nguồn nhân lực chất lượng cao cho các ngành kinh tế - xã hội của cả nước và quốc tế.</p><p>Trường đi tiên phong trong hội nhập khu vực và quốc tế; là thành viên chính thức của Hiệp hội các Trường Đại học Hàng hải Châu Á – Thái Bình Dương (AMETAP), Hiệp hội các Trường Đại học Hàng hải Quốc tế (IAMU) và Hiệp hội Vận tải Biển Quốc tế (BIMCO).
</p><p>Email: info@vimaru.edu.vn
</p><p>Điện thoại: (+84). 225. 3829 109 / 3735 931
</p><p>Fax : (+84). 225. 3735 282 / 3625 175
</p><p>Địa chỉ: 484 Lạch Tray, Kênh Dương, Lê Chân, TP Hải Phòng</p></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
    
 <div class="row">
    <div class="col-sm-3" ></div>
	<div class="col-sm-4" ><iframe width="560" height="315" src="https://www.youtube.com/embed/tj30ISWoStU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		
	</div>
  </div>

  

	<!-- List most finding School -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container ">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Hoạt động Sinh Viên</h2>
						<div class="section_subtitle"><p>Dưới đây là hoạt động của sinh viên thuộc các khóa các năm học ở trường đại học Hàng Hải Việt Nam </p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
			<!-- Start php get dt -->
			
				
			
				<!-- Course -->
				@foreach ($post_function as $value)
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image">
							<a href="{{ route('post_detail',$value->id) }}"><img src="{{ asset('public/images/upload/'.$value->anh) }}" width="670px" height="250px"></a>
						</div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="event_title"><a href="{{ route('post_detail',$value->id) }}">{{ $value->tieude }}</a></div>
								<div class="event_info_container">
									<div class="event_info">
										<span>Admin   |  </span>
										<i class="fa fa-clock-o" aria-hidden="true"></i><span>{{ $value->ngayviet}}</span></div>
			
									<div class="event_text">
										<p>{!! $value->mota !!}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach

			<!-- End php get dt -->
			
			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="hoat_dong.php">Xem thêm</a></div>
				</div>
			</div>
		</div>
	</div>


	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Tin tức mới nhất</h2>
						<div class="section_subtitle"><p>Những tin mới nhất luôn được đội ngũ trường đại học Hàng Hải cập nhật liên tục.</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Start php get dtdt -->

				
			<!-- Latest event  -->
				@foreach ($post_new as $value)
					<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image">
							<a href="{{ route('post_detail',$value->id) }}"><img src="{{ asset('public/images/upload/'.$value->anh) }}" width="670px" height="250px"></a>
						</div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="event_title"><a href="{{ route('post_detail',$value->id) }}">{{ $value->tieude }}</a></div>
								<div class="event_info_container">
									<div class="event_info">
										<span>Admin   |  </span>
										<i class="fa fa-clock-o" aria-hidden="true"></i><span>{{ $value->ngayviet}}</span></div>
			
									<div class="event_text">
										<p>{{ $value->mota }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			
			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="tin_tuc.php">Xem thêm</a></div>
				</div>
			</div>
		</div>
	</div>

 @stop