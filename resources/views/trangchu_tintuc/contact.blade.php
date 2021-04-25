 @extends('trangchu_layout')
 @section('content')
<!-- Home -->

	<div class="home"style="height: 150px;">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="{{ route('home_post') }}">Trang chủ</a></li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
          

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="container contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1864.438758623882!2d106.69328265797293!3d20.836651903315445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a9c2ee478df%3A0x6039ffe1614ede5c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIw6BuZyBo4bqjaSBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1617695815902!5m2!1svi!2s" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Trang đóng góp ý kiến</div>
							<form class="contactform" method="POST">                  
                    <div>
									<div class="form_title">Họ tên</div>
									<input type="text" class="comment_input" required="required" name="hoten">
								</div>
                   <div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" required="required" name="email">
								</div>
                   <div>
									<div class="form_title">Phản hồi</div>
									<textarea class="comment_input comment_textarea" required="required" name="noidung"></textarea>
								</div>               
                    <p class="form-submit">
                      <input type="submit" value="Gửi phản hồi" class="mu-post-btn" name="gui" onclick="guilienhe()">
                    </p>        
                  </form>
						</div>
					</div>
                    
					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Thông tin liên hệ</div>
							<div class="contact_info_text">
								<p>Mọi đóng góp phản hồi của các bạn sẽ được chúng tôi xem xét và phản hồi sớm nhất</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</div>
								<ul class="location_list">
									<li>Email: info@vimaru.edu.vn</li>
											<li>Điện thoại: (+84). 225. 3829 109 / 3735 931 </li>
											<li>Fax : (+84). 225. 3735 282 / 3625 175 </li>
											<li>Địa chỉ: 484 Lạch Tray, Kênh Dương, Lê Chân, TP Hải Phòng.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
     function guilienhe(){
      window.alert("Cảm ơn bạn đã gửi liên hệ !!!");
     }
   </script>
 @stop