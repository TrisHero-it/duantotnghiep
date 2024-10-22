@extends('admin.layouts.app')


@section('content')
<div class="container">
    <h1>Chi tiết tài Khoản</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Biệt danh</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>CCCD</th>
                <th>Mật khẩu</th>
                <th>Số dư</th>
                <th>Ảnh đại diện</th>
                <th>Bị cấm</th>
   
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $taikhoan->id }}</td>
                <td>{{ $taikhoan->ten }}</td>
                <td>{{ $taikhoan->ngay_sinh }}</td>
                <td>{{ $taikhoan->biet_danh }}</td>
                <td>{{ $taikhoan->gioi_tinh }}</td>
                <td>{{ $taikhoan->email }}</td>
                <td>{{ $taikhoan->sdt }}</td>
                <td>{{ $taikhoan->cccd }}</td>
                <td>{{ $taikhoan->mat_khau }}</td>
                <td>{{ $taikhoan->so_du }}</td>
                <td><img src="{{Storage::url($taikhoan->anh_dai_dien)}}" style="width: 100px;" alt=""></td>
                <td>{{ $taikhoan->bi_cam ? 'Có' : 'Không' }}</td>
                
 
            </tr>
      
        </tbody>
    </table>

  
</div>
@endsection