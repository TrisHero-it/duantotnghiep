@extends('admin.layouts.app')


@section('content')
<div class="row">
    <!-- Zero config table start -->
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
                                <th>STT</th>
                                <th>Tên người chơi</th>
                                <th>Tên Player</th>
                                <th>Nội dung</th>
                                <th>Đánh giá</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($binhluans as $binhluan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$binhluan->taikhoans->ten}}</td>
                                <td>{{$binhluan->players->taikhoans->ten}}</td>
                                <td>{{$binhluan->danh_gia}}</td>
                                <td>{{$binhluan->trang_thai}}</td>
                                <td>
                                    <form action="{{route('comments.destroy', $binhluan->id)}}" method="POST" onsubmit="return confirm('Bạn có muốn xoá không?')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-outline-danger"><i
                                                class="feather icon-slash"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Language - Comma Decimal Place table end -->
</div>
@endsection

@section('script')
<script src="{{asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
@endsection