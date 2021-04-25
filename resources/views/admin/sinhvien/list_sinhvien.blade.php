@extends('admin_layout')
@section('content')
<div class="container-fluid">
	<div>
		<h5 style="text-align: center;">DANH SÁCH SINH VIÊN</h5>
		@if (session('thanhcong'))
			<p class="text-success text-center">{{ session('thanhcong') }}</p>
		@endif
		<a href="{{ route('add_student_view') }}" class="btn btn-success">Thêm mới</a>
		<div class="table-responsive">
			<table class="table align-items-center table-flush" id="table_student">
				<thead class="thead-dark">
					<tr style="text-align: center;">
						<th width="200px;" scope="col">STT</th>
						<th scope="col">Mã sinh viên</th>
						<th scope="col">Tên sinh viên</th>
						<th scope="col">Ngày sinh</th>
						<th scope="col">Giới tính</th>
						<th scope="col">Lớp hành chính</th>
						<th scope="col">Thao tác</th>
					</tr>
				</thead>
				@php
					$i = 1;
				@endphp
				<tbody>
					@foreach ($student as $value)
					<tr style="text-align: center;">
						<td scope="row">{{ $i++ }}</td>
						<td>{{ $value->msv }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->birthday }}</td>
						<td>{{ $value->gender==1?'nam':'nữ' }}</td>
						<td>{{ $value->class }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('edit_student',$value->id) }}">Sửa</a>
							<a class="btn btn-danger" href="{{ route('delete_student',$value->id) }}">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>          
</div>
@stop