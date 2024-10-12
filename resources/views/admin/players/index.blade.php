@extends('admin.layouts.app')


@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Danh sách players</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>Ảnh đại diện</th>
                                <th>Trạng thái</th>
                                <th>Phân quyền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody style="color: white;">
                            @foreach ($players as $player)
                                <tr>
                                    <td>{{ $player -> id }}</td>
                                    <td>{{ $player -> taiKhoan -> ten }}</td>
                                    <td>{{ $player -> taiKhoan -> gioi_tinh }}</td>
                                    <td><img src="{{ $player -> taiKhoan -> anh_dai_dien }}" alt=""></td>
                                    <td>{{ $player -> trang_thai_player }}</td>
                                    <td>{{ $player -> taiKhoan -> phanQuyen -> ten }}</td>
                                    <td><a class="btn btn-info" href="{{ route('players.show', $player -> id) }}">Chi tiết</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 
    <!-- [ form-element ] end -->
</div>

@endsection