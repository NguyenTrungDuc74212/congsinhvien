@extends('admin_layout')
@section('content')
<div class="container-fluid">
          <!-- Page Heading -->
          <style>
            .card-body a{
              color: #333;
            }
            .card-body a:hover{
              text-decoration: none;
              color: blue;
              transition: 0.5s;
            }
            .image-item a img{
              display: block;
              width: 100%;
            }
            .image-item{
              text-align: center;
              padding-bottom: 10px;
            }

            .text-primary{
              width: 100%;
            }
            .new{
              text-align: right;
              animation: example 2s infinite;
            }

            @keyframes example {
              0%   {color: red;}
              25%  {color: yellow;}
              50%  {color: blue;}
              100% {color: green;}
            }
          </style>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-red-800" style="text-transform: uppercase; text-align: center;">Thống kê thông tin</h1>
          </div>
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <a href="?ql=baiviet/ds" style="color: red;" >Thống kê bài viết Hoạt động</a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-red-800">6 bài viết</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        <a href="?ql=lienhe/ds" style="color: green;" >Thống kê Ý kiến phản hồi</a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-red-800">0 phản hồi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        <a href="?ql=admin/ds" style="color: blue;" >Thống kê bài viết Danh sách lịch thi</a>
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-red-800">3 bài viết</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        <a href="?ql=admin/ds" style="color: blue;" >Thống kê bài viết Điểm thi</a>
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-red-800">5 bài viết</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="?ql=tintuc/ds" style="color: orange;" >Thống kê tin tức</a></div>
                      <div class="h5 mb-0 font-weight-bold text-red-800">23 tin tức</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href=# style="color: orange;" >Thống kê truy cập</a></div>
                      <div class="h5 mb-0 font-weight-bold text-red-800">18 Người đã truy cập</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-secret fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href=# style="color: orange;" >Tổng truy cập</a></div>
                      <div class="h5 mb-0 font-weight-bold text-red-800">663 Lượt truy cập</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-eye fa-2x text-red-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  

          </div>
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Bài viết mới nhất <span class="new">NEW ***</span></h6>
                </div>
                <!-- Card Body -->
                                <div class="card-body">
                  <div class="chart-area" style="height: 100%;">
                    <div class="post-item">
                      <div class="image-item col-md-12">
                        <a href="?ql=tintuc/sua&id=52"><img style="height: 300px" src="./images/ctsv_copy (1).png" alt=""></a>
                      </div>
                      <div class="col-md-12 content-item">
                        <h5><a href="?ql=tintuc/sua&id=52">Điểm thi môn CDIO-17302</a></h5>
                        <span><p>Danh sách điểm thi CDIO-17302 - Xem chi tiết trong file đính kèm </p></span>
                        <p>Ngày viết : 06-04-2021 19:20:23</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Danh sách bài viết</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=52">Điểm thi môn CDIO-17302</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 19:20:23</p></div>
                  </div>
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=51">Điểm thi môn Hệ thống nhúng</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 19:18:56</p></div>
                  </div>
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=50">Điểm thi môn Phân tích và thiết kế hệ thống</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 19:16:08</p></div>
                  </div>
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=49">Điểm thi môn Lập Trình Windown</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 19:07:27</p></div>
                  </div>
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=48">Điểm thi môn Lập Trình Mạng</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 18:50:51</p></div>
                  </div>
                                    <div class="danhsachbaiviet">
                    <div class="col-xl-12"><h5><a href="?ql=tintuc/sua&id=47">Thông báo lịch thi học kỳ phụ năm học 2020-2021</a></h5></div>
                    <div class="col-xl-12"><p>Ngày viết : 06-04-2021 17:48:30</p></div>
                  </div>
                                    <div class="tintuc" style="text-align: end;"><a href="?ql=tintuc/ds">Xem thêm...</a></div>
                </div>
              </div>
            </div>
          </div>          
        </div>
@stop