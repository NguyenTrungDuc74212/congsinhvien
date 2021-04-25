
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VMU - Cổng thông tin Sinh viên</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/theme/vendor/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('public/theme/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/theme/css/admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('public/theme/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25288230-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-25288230-2');
  </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard_student') }}">Cổng Thông tin Sinh viên</a>
            </div>
            <!-- /.navbar-header -->


            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('dashboard_student') }}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                        </li>
                        <li>
                            <a href="https://sinhvien.vimaru.edu.vn/auth/khaosat"><i class="fa fa-question fa-fw"></i> Khảo sát</a>
                        </li>
                        <li>
                            <a href="{{ route('bangdiem') }}"><i class="fa fa-tasks fa-fw"></i> Bảng điểm</a>
                        </li>
                        <li>
                            <a href="https://sinhvien.vimaru.edu.vn/auth/lichthi"><i class="fa fa-table fa-fw"></i> Lịch thi</a>
                        </li>
						  <!--
						<li>
                            <a href="https://sinhvien.vimaru.edu.vn/auth/hocphi"><i class="fa fa-th fa-dollar"></i> Học phí</a>
                        </li>	-->
                        <li>
                            <a href="https://www.meinvoice.vn/tra-cuu/" target="_blank"><i class="fa fa-th fa-dollar"></i> Tra cứu hóa đơn</a>
                        </li>


                        <li>
                            <a href="{{ route('logout_student') }}"><i class="fa fa-sign-out"></i> Thoát</span></a>
                        </li>
                    </ul>
                    <a href="http://citad.vn/sukien/14/thong-bao-tuyen-sinh-cac-lop-mos-thang-92020" target="_blank"><img width="100%" src="{{asset('public/img/citad.jpg')  }}"></a>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('public/theme/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/theme/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/theme/js/sb-admin-2.js') }}"></script>

</body>

</html>

