<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trang quản trị </title>

  <!-- Custom fonts for this template-->
  <link REL="SHORTCUT ICON" href="./images/logott.ico">
  <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Trang chủ</div>
      </a>

      <!-- Divider --> 
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trang quản trị</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('list_category_post') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Loại tin tức</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="{{ route('list_post') }}">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Tin tức</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Lịch thi</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('list_score') }}">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Điểm thi</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('list_student') }}">
          <i class="fas fa-fw fa-book-open"></i>
          <span>sinh viên</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-id-card-alt"></i>
          <span>Ý kiến phản hồi</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('list_admin') }}">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Admin</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <marquee>CHÀO MỪNG BẠN ĐÃ ĐẾN VỚI TRANG QUẢN TRỊ 
          </marquee>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (Auth::check())
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                @endif
                <img class="img-profile rounded-circle" src="{{ asset('public/images/upload/logo4.jpg') }}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="?ql=admin/sua&id=9">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Đổi mật khẩu
                </a>
                <a class="dropdown-item" href="{{ route('list_admin') }}">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Danh sách tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('log_out') }}" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Đăng xuất
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        @yield('content');
        <!-- Begin Page Content -->
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/daohuy2499" target="_blank">Quang Huy</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất không?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Click chọn Đăng xuất để thoát !</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="{{ route('log_out') }}">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('public/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('public/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('public/js/demo/chart-pie-demo.js') }}"></script>
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
   $(document).ready( function () {
    $('#table_category_post').DataTable();
    $('#table_post').DataTable();
    $('#table_admin').DataTable();
    $('#table_student').DataTable();
} );
</script>
<script type="text/javascript">
  $( function() {
    $( "#datepicker").datepicker({
      dateFormat: "dd-mm-yy",
    });
  } );
</script>
<script type="text/javascript">

    $(document).on('keyup', '#diemy', function(event) {
        var diemx = parseInt($('#diemx').val());
        var diemy = parseInt($(this).val());
        $('#diemz').val((diemx*0.5)+(diemy*0.5));
        var diemz = (diemx*0.5)+(diemy*0.5);
        var diemchu = '';
        if (diemz>=9) {
            diemchu = 'A+';
        } else if(diemz>=8.5&&diemz<9)
           {
              diemchu = 'A';
           }
           else if(diemz>=8.0&&diemz<=8.4){
               diemchu = 'B+';
           }
           else if(diemz>=7&&diemz<=7.9){
               diemchu = 'B';
           }
           else if(diemz>=6.5&&diemz<=6.9){
               diemchu = 'C+';
           }
           else if(diemz>=5.5&&diemz<=6.4){
               diemchu = 'C';
           }
           else if(diemz>=5&&diemz<=5.4){
               diemchu = 'D+';
           }
           else if(diemz>=4&&diemz<=4.9){
               diemchu = 'D';
           }
        else {
          diemchu = 'F';
        }
         $('#diemchu').val(diemchu);
    });

</script>
</body>

</html>
