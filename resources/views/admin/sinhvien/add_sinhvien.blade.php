 @extends('admin_layout')
 @section('content')
 <div class="container-fluid">
  <div>
     <script src="//cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>
     <h1 style="text-align: center; padding-top: 20px;">THÊM SINH VIÊN</h1>
     <div class="container-fluid mt--7">
        <div class="col-xl-12 order-xl-1">
            <div class="card-body">
                <form  action="{{ route('save_student') }}" method="post">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Mã sinh viên</label>
                                    <input name="msv" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mã sinh viên" value="">
                                    @error('msv')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Họ và tên</label>
                                    <input name="name" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Họ và tên" value="">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Ngày sinh</label>
                                    <input name="birthday" type="text" id="datepicker" class="form-control form-control-alternative" placeholder="Ngày sinh" value="" autocomplete="off">
                                    @error('birthday')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group focused">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="1" {{ old('gender')==1 ? 'checked':''}}>
                                        <label class="form-check-label">Nam</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="2" {{ old('gender')==2?'checked':''}}>
                                        <label class="form-check-label">Nữ</label>
                                    </div>
                                    @error('gender')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Lớp</label>
                                    <input name="class" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Lớp" value="">
                                    @error('class')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Email</label>
                                    <input name="email" type="email" id="input-username" class="form-control form-control-alternative" placeholder="Email" value="">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">Password</label>
                                    <input name="password" type="password" id="input-username" class="form-control form-control-alternative" placeholder="password" value="">
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>  

                                <div>
                                    <input name="them" type="submit" value="Thêm mới" class="btn btn-outline-success">
                                    <a href="{{ route('list_student') }}"  class="btn btn-outline-secondary" >Danh sách sinh viên</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop