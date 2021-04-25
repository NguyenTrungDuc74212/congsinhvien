@extends('admin_layout')
@section('content')
<div class="container-fluid">
	<div>
		<h5 style="text-align: center;">DANH SÁCH LOẠI TIN TỨC</h5>
		@if (session('thanhcong'))
			<p class="text-success text-center">{{ session('thanhcong') }}</p>
		@endif
		<a href="{{ route('add_post_view') }}" class="btn btn-success">Thêm mới</a>
		<div class="table-responsive">
			<table class="table align-items-center table-flush" id="table_category_post">
				<thead class="thead-dark">
					<tr style="text-align: center;">
						<th width="200px;" scope="col">STT</th>
						<th scope="col">Tên loại tin tức</th>
						<th scope="col">Tác vụ</th>
					</tr>
				</thead>
				@php
					$i = 1;
				@endphp
				<tbody>
					@foreach ($category as $value)
					<tr style="text-align: center;">
						<td scope="row">{{ $i++ }}</td>
						<td>{{ $value->ten_loai_tin_tuc }}</td>
						<td>
							<a class="btn btn-primary" href="{{ route('edit_category_view',$value->id) }}">Sửa</a>
							<a class="btn btn-danger" href="{{ route('delete_category_post',$value->id) }}">Xóa</a>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>          
</div>
@stop