 @extends('admin_layout')
 @section('content')
 <div class="container-fluid">
  <div>
    <h5 style="text-align: center;">DANH SÁCH ADMIN</h5>
    @if (session('thanhcong'))
    <p class="text-success text-center">{{ session('thanhcong') }}</p>
    @endif
    <div class="table-responsive">
        <table class="table align-items-center table-flush" id="table_admin">
            <thead class="thead-dark">
                <tr class="text-nowrap">
                    <th scope="col">STT</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            @php
            $i=1;
            @endphp
            <tbody>
                @foreach ($admin as $value)
                <tr>
                    <td style="width: 50px;">{{ $i++ }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop        