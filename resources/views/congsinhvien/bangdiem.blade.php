@extends('congsinhvien_layout')
@section('content')        
<div id="page-wrapper" style="min-height: 99px;">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="fa fa-table"></span> BẢNG ĐIỂM</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="tbl-diem">
               <pre>Mã sinh viên:   <b>{{ $student->msv }}</b><br>Họ tên:         <b>{{ $student->name }}</b><br>Ngày sinh:      <b>{{ $student->birthday }}</b><br>Giới tính:      <b>{{ $student->gender==1?'name':'nữ' }}</b><br>Lớp hành chính: <b class="text-uppercase">{{ $student->class }}</b></pre>
               <!-- /.panel-body -->
               <br>
           </div>

           <table class="table table-borderless table-responsive">
            <thead>
              <tr>
                <th class="text-center">Học phần</th>
                <th class="text-center">Tín chỉ</th>
                <th class="text-center">Công thức</th>
                <th class="text-center">X</th>
                <th class="text-center">Y</th>
                <th class="text-center">Z</th>
                <th class="text-center">Điểm chữ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($score as $value)
            <tr class="text-center">
                <td>{{ $value->hocphan }}</td>
                <td>{{ $value->tinchi }}</td>
                <td>0.5 * X1 + 0.5 * Y1</td>
                <td>{{ $value->diemx }}</td>
                <td>{{ $value->diemy }}</td>
                <td>{{ $value->diemz }}</td>
                <td>{{ $value->diemchu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- /.panel -->
</div>
</div>          
</div>
@stop