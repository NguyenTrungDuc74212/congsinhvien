 @extends('admin_layout')
 @section('content')
 <div class="container-fluid">
  <div>
    <h5 style="text-align: center;">DANH SÁCH TIN TỨC</h5>
    @if (session('thanhcong'))
    <p class="text-success text-center">{{ session('thanhcong') }}</p>
    @endif
    <a href="{{ route('add_post') }}" class="btn btn-success">Thêm</a>
    <div class="table-responsive">
        <table class="table align-items-center table-flush" id="table_post">
            <thead class="thead-dark">
                <tr class="text-nowrap">
                    <th scope="col">STT</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Loại tin tức</th>

                    <th scope="col">Nguồn</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tác Vụ</th>
                </tr>
            </thead>
            @php
            $i=1;
            @endphp
            <tbody>
                @foreach ($post as $value)
                <tr>
                    <td style="width: 50px;">{{ $i++ }}</td>
                    <td>{{ $value->tieude }}</td>
                    <td>{{ $value->category_post->ten_loai_tin_tuc }}</td>

                    <td>{{ $value->nguon }}</td>
                    <td><img style="width:150px; height: 100px;" src="{{ asset('public/images/upload/'.$value->anh) }}" alt=""></td>
                    <td class="text-nowrap">
                        <a class="btn btn-primary" href="{{ route('edit_post_view',$value->id) }}">Sửa</a>
                        <a class="btn btn-danger" href="{{ route('delete_post',$value->id) }}">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop        