@extends('congsinhvien_layout')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class=" fa  fa-dashboard "></span> BẢNG TIN</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
       <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-question fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Khảo sát</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="https://sinhvien.vimaru.edu.vn/auth/khaosat">
                <div class="panel-footer">
                    <span class="pull-left">Xem</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-table fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Bảng điểm</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="{{ route('bangdiem') }}">
                <div class="panel-footer">
                    <span class="pull-left">Xem</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">Lịch thi</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="https://sinhvien.vimaru.edu.vn/auth/lichthi">
                <div class="panel-footer">
                    <span class="pull-left">Xem</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-th-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">TKB</div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="http://dktt.vimaru.edu.vn/cmcsoft.iu.web.info/(S(lkz1uxzacalb3ukaeakdq1g0))/TeacherTimeTable/SeachStaff.aspx">
                <div class="panel-footer">
                    <span class="pull-left">Xem</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>
<div class="row">		
   <div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Tin nổi bật nhất
        </div>
        <div class="panel-body">
            <ul>
                @foreach ($post_highlights as $value)
                    <li><a href="{{ route('post_detail',$value->id) }}">{{ $value->tieude }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tin Công tác sinh viên
            </div>
            <div class="panel-body">
               <ul>
                 @foreach ($post as $value)
                    <li><a href="{{ route('post_detail',$value->id) }}">{{ $value->tieude }}</a>
                </li>
                @endforeach
               </ul>                        
           </div>
           <!-- /.panel-body -->
       </div>
       <!-- /.panel -->
   </div>
   <!-- /.col-lg-4 -->

</div>

@stop