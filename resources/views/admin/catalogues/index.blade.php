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
                                <th>Tên danh mục</th>
                                <th>Ảnh đại diện</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catalogues as $catalogue)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$catalogue->ten_danh_muc}}</td>
                                <td>
                                    <img src="{{Storage::url($catalogue->image)}}" alt="" width="100px">
                                </td>
                                <td>{{$catalogue->trang_thai}}</td>
                                <td>
                                    <form action="{{route('catalogues.destroy', $catalogue->id)}}" method="POST" onsubmit="return confirm('Bạn có muốn xoá không?')">
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
<script src="{{asset('assets/js/pages/data-basic-custom.js')}}"></script>
@endsection