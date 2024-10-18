@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Sửa tài khoản</h1>
    <form action="{{ route('update' , $taikhoans->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="ten" class="form-control" value="{{$taikhoans->ten}}" required>
        </div>
        <div class="form-group">
            <label for="name">Ngày sinh</label>
            <input type="date" name="ngay_sinh" class="form-control" value="{{$taikhoans->ngay_sinh}}" required>
        </div>
        <div class="form-group">
            <label for="name">Biệt danh</label>
            <input type="text" name="biet_danh" class="form-control" value="{{$taikhoans->biet_danh}}" required>
        </div>
        <div class="form-group">
            <label for="name">Giới tính</label>
            <select name="gioi_tinh" id="">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{$taikhoans->email}}" required>
        </div>
        <div class="form-group">
            <label for="email">Số điện thoại</label>
            <input type="number" name="sdt" class="form-control" value="{{$taikhoans->sdt}}" required>
        </div>
        <div class="form-group">
            <label for="email">Căn cước công dân</label>
            <input type="file" name="cccd" class="form-control" value="{{$taikhoans->cccd}}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="mat_khau" class="form-control" value="{{$taikhoans->mat_khau}}" required>
        </div>
        <div class="form-group">
            <label for="password">Số dư</label>
            <input type="number" name="so_du" class="form-control" value="{{$taikhoans->so_du}}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Ảnh đại diện</label>
            <input type="file" name="anh_dai_dien" class="form-control" value="{{$taikhoans->anh_dai_dien}}" required>
        </div>
        <div class="form-group">
            <label for="email">Bị cấm</label>
            <input type="text" name="bi_cam" class="form-control" value="{{$taikhoans->bi_cam}}" required>
        </div>
        <!-- <div class="form-group">
            <label for="password">Chức vụ</label>
            <select name="ten" id="phan_quyen_id">
                <option value="Admin">Admin</option>
                <option value="Player">Player</option>
                <option value="Người dùng">Người dùng</option>
            </select>
        </div> -->
        
        <button type="submit" class="btn btn-success">Sửa tài khoản</button>
    </form>
</div>

