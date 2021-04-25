 @extends('admin_layout')
 @section('content')
 <div class="container-fluid">
  <div>
   <script src="//cdn.ckeditor.com/4.4.5.1/full-all/ckeditor.js"></script>
   <h1 style="text-align: center; padding-top: 20px;">CẬP NHẬT TIN TỨC</h1>
   <div class="container-fluid mt--7">
    <div class="col-xl-12 order-xl-1">
        <div class="card-body">
            <form  action="{{ route('save_edit_post',$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Tiêu đề</label>
                                <input name="tieude" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tiêu đề" value="{{ $post->tieude }}">
                                @error('tieude')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Loại tin tức</label>
                                <select name="loaitintuc" id="">
                                    <option value="">---Chọn loại tin tức---</option>
                                    @foreach ($category as $value)
                                        <option value="{{ $value->id }}" {{ $value->id==$post->maloaitintuc?'selected':'' }}>{{ $value->ten_loai_tin_tuc }}</option>
                                    @endforeach
                                </select>
                                @error('loaitintuc')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Mô tả</label>
                                <input name="mota" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mô tả" value="{{ $post->mota }}">
                                @error('mota')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Nội dung</label>
                                <textarea name="noidung">{!! $post->noidung !!}</textarea>
                                @error('noidung')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <script>
                                    CKEDITOR.replace( 'noidung' );
                                </script>
                            </div>
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Nguồn</label>
                                <input name="nguon" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nguồn" value="{{ $post->nguon }}">
                                @error('nguon')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Ảnh</label>
                                <input type="file" name="anh"><br>
                                <input type="hidden" name="img_old" value="{{ $post->anh }}">
                                @error('anh')
                                 <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>   

                            <div>
                                <input name="them" type="submit" value="Thêm mới" class="btn btn-outline-success">
                                <a href="{{ route('list_post') }}"  class="btn btn-outline-secondary" >Danh sách tin tức</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop