@extends('admin.layouts.app')
@section('title', 'Lịch sử nạp tiền')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Zero Configuration</h5>
            </div>
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Mã nạp</th>
                                <th>Người nạp</th>
                                <th>Số tiền</th>
                                <th>Phương thức thanh toán</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lichSuNaps as $lichSuNap)
                            <td>{{$lichSuNap->ma_don}}</td>
                            <td>{{$lichSuNap->taiKhoan->ten}}</td>
                            <td>{{$lichSuNap->so_tien}}</td>
                            <td>{{$lichSuNap->phuong_thuc_thanh_toan->ten_phuong_thuc}}</td>
                            <td>{{$lichSuNap->trangThai}}</td>
                            <td>
                                <a class="btn btn-info">Xem chi tiết</a>
                                <button class="btn btn-success">Duyệt</button>
                                <button class="btn btn-danger">Từ chối</button>
                            </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection