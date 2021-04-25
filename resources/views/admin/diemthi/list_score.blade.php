@extends('admin_layout')
@section('content')
<div class="container-fluid">
	<div>
		<h5 style="text-align: center;">DANH SÁCH ĐIỂM SINH VIÊN</h5>
		@if (session('thanhcong'))
			<p class="text-success text-center">{{ session('thanhcong') }}</p>
		@endif
		<a href="{{ route('add_score_view') }}" class="btn btn-success">Thêm mới</a>
		<div class="table-responsive">
			<table class="table align-items-center table-flush" id="table_category_post">
				<thead class="thead-dark">
					<tr style="text-align: center;" class="text-nowrap">
						<th width="200px;" scope="col">STT</th>
						<th scope="col">Mã sinh viên</th>
						<th scope="col">Tên học phần</th>
						<th scope="col">Số tín chỉ</th>
						<th scope="col">Điểm X</th>
						<th scope="col">Điểm Y</th>
						<th scope="col">Điểm Z</th>
						<th scope="col">Điểm chữ</th>	
						<th scope="col">Tác vụ</th>
					</tr>
				</thead>
				@php
					$i = 1;
				@endphp
				<tbody>
					@foreach ($score as $value)
					<tr style="text-align: center;">
						<td scope="row">{{ $i++ }}</td>
						<td>{{ $value->student->msv }}</td>
						<td>{{ $value->hocphan }}</td>
						<td>{{ $value->tinchi }}</td>
						<td>{{ $value->diemx }}</td>
						<td>{{ $value->diemy }}</td>
						<td>{{ $value->diemz }}</td>
						<td>{{ $value->diemchu }}</td>
						<td class="text-nowrap">
							<a class="btn btn-primary" href="">Sửa</a>
							<a class="btn btn-danger" href="{{ route('delete_score',$value->id) }}" onclick="return confirm('Bạn có chắc xóa danh mục này không?')">Xóa</a>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>          
</div>
@stop