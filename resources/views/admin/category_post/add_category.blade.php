@extends('admin_layout')
@section('content')
<div class="container-fluid">
	<div>
		<h5>Thêm mới loại tin tức</h5>
		<div class="container-fluid mt--7">
			<div class="col-xl-12 order-xl-1">
				<div class="card-body">
					<form action="{{ route('save_post') }}" method="post">
						@csrf
						<div class="pl-lg-4">
							<div class="form-group focused">
								<label class="form-control-label">Tên loại tin tức</label>
								<input type="text" name="ten_loai_tin_tuc" class="form-control form-control-alternative" placeholder="Tên loại tin tức" value="{{ Request()->input('ten_loai_tin_tuc') }}">
								@error('ten_loai_tin_tuc')
                                    <p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<input type="submit" name="them" value="Thêm mới"  class="btn btn-outline-success">
							<a href="{{ route('list_category_post') }}" class="btn btn-outline-secondary">Danh sách chuyên mục</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>          
</div>

@stop