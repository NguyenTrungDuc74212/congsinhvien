@extends('admin_layout')
@section('content')
<div class="container-fluid">
	<div>
		<h5>Thêm mới điểm sinh viên</h5>
		<div class="container-fluid mt--7">
			<div class="col-xl-12 order-xl-1">
				<div class="card-body">
					<form action="{{ route('save_score') }}" method="post">
						@csrf
						<div class="pl-lg-4">
							<div class="form-group focused">
								<label class="form-control-label" for="input-username">Mã sinh viên</label>
								<select name="student_id" id="" class="form-control selectpicker"data-live-search="true" data-show-subtext="true">
									<option value="">---Chọn mã sinh viên---</option>
									@foreach ($student as $value)
									<option data-tokens="{{ $value->name }}" value="{{ $value->id }}">{{ $value->msv }}</option>
									@endforeach
								</select>
								@error('student_id')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">Tên học phần</label>
								<input type="text" name="hocphan" class="form-control form-control-alternative" placeholder="Tên học phần" value="">
								@error('hocphan')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">Tín chỉ</label>
								<input type="number" name="tinchi" class="form-control form-control-alternative" placeholder="Tín chỉ" value="" min="0">
								@error('tinchi')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">điểm X</label>
								<input type="number" name="diemx" class="form-control form-control-alternative" placeholder="Điểm X" value="" min="0" id="diemx"> 
								@error('diemx')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">điểm Y</label>
								<input type="number" name="diemy" class="form-control form-control-alternative" placeholder="Tên học phần" value="" min="0" id="diemy">
								@error('diemy')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">điểm Z</label>
								<input type="number" id="diemz" class="form-control form-control-alternative" name="diemz" placeholder="điểm z" value="" min="0" readonly="False">
								@error('diemz')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group focused">
								<label class="form-control-label">điểm chữ</label>
								<input type="text" id="diemchu" class="form-control form-control-alternative" placeholder="điểm chữ" value="" name="diemchu" readonly="False">
								@error('diemchu')
								<p class="text-danger">{{ $message }}</p>
								@enderror
							</div>

							<input type="submit" name="them" value="Thêm mới"  class="btn btn-outline-success">
							<a href="{{ route('list_score') }}" class="btn btn-outline-secondary">Danh sách điểm sinh viên</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>          
</div>
@stop