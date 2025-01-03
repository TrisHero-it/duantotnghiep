@extends('admin.layouts.app')


@section('content')
<div class="container">
    <h1>Danh Sách Tài Khoản</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('create') }}" class="btn btn-primary">Thêm tài khoản</a>
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
                <th>Ảnh đại diện</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($taikhoans as $taikhoan)
            <tr>
                <td>{{ $taikhoan->id }}</td>
                <td>{{ $taikhoan->ten }}</td>
                <td>{{ $taikhoan->ngay_sinh }}</td>
                <td>{{ $taikhoan->biet_danh }}</td>
                <td>{{ $taikhoan->gioi_tinh }}</td>
                <td>{{ $taikhoan->email }}</td>
                <td>{{ $taikhoan->sdt }}</td>
                <td><img src="{{Storage::url($taikhoan->anh_dai_dien)}}" style="width: 100px;" alt=""></td>
                
                
               
                <td>
                    <a href="{{route('edit', $taikhoan->id)}}" class="btn btn-warning">Chỉnh sửa</a>
                    <form action="{{route('delete',$taikhoan->id)}}" method="POST" style="display:inline;" onclick="confirm('Bạn có chắc muốn xóa không?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>

                      
                    </form>
                    <a href="{{ route('show', $taikhoan->id) }}" class="btn btn-info">Xem chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

  
</div>
@endsection