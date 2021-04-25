<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cổng thông tin sinh viên Hàng Hải</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link REL="SHORTCUT ICON" href="./images/logott.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/styles/bootstrap4/bootstrap.min.css' )}}">
	<link href="{{ asset('public/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/OwlCarousel2-2.2.1/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/styles/blog_single.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/styles/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/styles/responsive.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/styles/load.css') }}">


</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5f0dacfe5b59f94722bab2e8/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
	})();
</script>
<!--End of Tawk.to Script-->

<body class="preloading">


	<div class="load">
		<img src="{{ asset('public/images/upload/Ring-Preloader/Comp-2.gif') }}" alt="">
	</div>
	<div class="super_container">
		<!-- Header -->
		<!-- Header -->

		<header class="header">


			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo_text">
											<img src="{{ asset('public/images/upload/logo0.jpg') }}" height="85px" width="330px" alt="">

										</div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li class="active"><a href="{{ route('home_post') }}">Trang chủ</a></li>
										<li class="active1"><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
										<li class="dropdown ">
											<a style="font-family: fa-brands-400.svg" href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tin tức</a>
											<ul class="dropdown-menu">
												@foreach ($category as $value)
												<li><a class="dropdown-item" href="{{ route('post',$value->id) }}">{{ $value->ten_loai_tin_tuc }}</a></li>
												@endforeach
											</ul></li>
											<li class="active4"><a href="{{ route('lienhe')}}">Liên hệ</a></li>


										</ul>
										<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

										<div class="hamburger menu_mm">
											<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
										</div>
									</nav>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Header Search Panel -->
				<div class="header_search_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
									<form action="tim_kiem.php" class="header_search_form" method="POST">
										<input type="search" class="search_input" name="ndtk" placeholder="Nội dung" required="required">
                            <!-- <select name="dieukien" class="dropdown_item_select header_search_button">
                                <option value="Truong" >Trường</option>
                                <option value="Diem" >Điểm</option>
                            </select> -->
                            <button type="submit" class="header_search_button d-flex flex-column align-items-center justify-content-center">
                            	<i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>			
    </div>			
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<div class="search">
		<form action="tim_kiem.php" class="header_search_form menu_mm" method="POST">
			<input type="search" class="search_input" name="ndtk" placeholder="Nội dung" required="required">
            <!-- <select name="dieukien" class="dropdown_item_select header_search_button">
                <option value="Truong" >Trường</option>
                <option value="Diem" >Điểm</option>
            </select> -->
            <button type="submit" class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
            	<i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
    	<ul class="menu_mm">
    		<li class="active"><a href="{{ route('home_post') }}">Trang chủ</a></li>
    		<li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
    		<li><a href="#">Hoạt động</a></li>
    		<li><a href="tin_tuc.php">Tin tức</a></li>
    		<li><a href="lien_he.php">Liên hệ</a></li>
    	</ul>
    </nav>
</div>

@yield('content')

<footer class="footer">
	<div class="footer_background" style="background-image:url(public/images/upload/footer_background.png)"></div>
	<div class="container">
		<div class="row footer_row">
			<div class="col">
				<div class="footer_content">
					<div class="row">

						<div class="col-lg-4 footer_col">

							<!-- Footer About -->
							<div class="footer_section footer_about">
								<div class="footer_logo_container">
									<a href="#">
										<div class="footer_logo_text"><img src="{{ asset('public/images/upload/logo4.jpg') }}" height="90px" alt=""></div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</p>

								</div>
								<div class="footer_social">
									<ul>
										<li><a href="https://www.facebook.com/daihochanghaivietnam/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>

						</div>

						<div class="col-lg-4 footer_col">

							<!-- Footer Contact -->
							<div class="footer_section footer_contact">
								<div class="footer_title">Liên hệ</div>
								<div class="footer_contact_info">
									<ul>
										<li>Email:    info@vimaru.edu.vn</li>
										<li>Điện thoại:    (+84). 225. 3829 109 / 3735 931</li>
										<li>Fax :     (+84). 225. 3735 282 / 3625 175</li>
										<li>Địa chỉ:     484 Lạch Tray, Kênh Dương, Lê Chân, TP Hải Phòng.</li>
									</ul>
								</div>
							</div>

						</div>

						<div class="col-lg-4 footer_col">

							<!-- Footer links -->
							<div class="footer_section footer_links">
								<div class="footer_title">Xem thêm</div>
								<div class="footer_links_container">
									<ul>
										<li class="active"><a href="">Trang chủ</a></li>
										<li><a href="">Giới thiệu</a></li>
										<li><a href="">Hoạt động</a></li>
										<li><a href="">Lịch thi</a></li>
										<li><a href="">Điểm thi</a></li>
										<li><a href="">Tin tức</a></li>
										<li><a href="">Liên hệ</a></li>

									</ul>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row copyright_row">
			<div class="col">
				<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<div class="cr_text">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/daohuy2499" target="_blank">Quang Huy</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div></div>
<script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('public/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('public/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('public/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('public/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('public/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('public/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('public/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('public/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('public/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>

<script src="{{ asset('public/js/load.js') }}"></script>
</body>
</html>