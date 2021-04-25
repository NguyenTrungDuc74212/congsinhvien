<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="theme/dist/js/browser-deeplink.js"></script>

  <title>VMU - Cổng thông tin Sinh viên</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('public/theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/theme/vendor/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="{{asset('public/theme/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('public/theme/dist/css/login.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{asset('public/theme/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

    <body>

      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title"><b>CỔNG THÔNG TIN SINH VIÊN - VMU</b></h2>
                @if (session('thongbao'))
                  <p class="text-danger" style="margin: 10px 0px">{{ session('thongbao') }}</p>
                @endif
              </div>
              <div class="panel-body">
               <p class="alert alert-danger"><b>V/v Hỗ trợ đổi mật khẩu tài khoản email</b>
                <br/>Sinh viên liên hệ Văn phòng CITAD (phòng 108 Nhà A5)
              </p>
              <form action="{{ route('check_login_student') }}" method="post">
                @csrf
                <p class="text-center"><img src="{{ asset('public/theme/img/icon-student-parent.png') }}"></p>
                <p>Hệ thống chấp nhận các tài khoản mail dạng <i> (*@st.vimaru.edu.vn)</i> để đăng nhập hệ thống</p>
                <fieldset class="form-group">
                 <label>Email</label>
                 <input type="email" name="email" class="form-control" placeholder="nhập gmail">					
               </fieldset>
               <fieldset class="form-group">
                 <label>Mật khẩu</label>
                 <input type="password" name="password" class="form-control" placeholder="nhập password">                  
               </fieldset>
               <fieldset class="form-group">
                <input type="submit" name="" value="Đăng nhập" class="form-control btn btn-danger">
              </fieldset>
            </form>
            <hr>
            <p><span>Phiên bản trên điện thoại </span><a href="https://play.google.com/store/apps/details?id=com.vimaru"><img style="width:100px" src="{{ asset('public/theme/img/playstore.png') }}"></a></p>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CITAD</h4>
        </div>
        <div class="modal-body" >
          <p style="text-align:center"><a href="http://citad.vn/sukien/14/uu-dai-dac-biet-cho-cac-hoc-vien-hoc-mos-tai-citad"><img src="img/mos2020.png" ></a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>

    </div>
  </div>
  <!-- jQuery -->
  <script src="{{ asset('public/theme/vendor/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('public/theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('public/theme/vendor/metisMenu/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('public/theme/dist/js/sb-admin-2.js') }}"></script>
  <script>
    $(document).ready(function(){
  // Show the Modal on load
  $("#myModal1").modal("show");
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-25288230-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-25288230-2');
</script>

</body>

</html>

