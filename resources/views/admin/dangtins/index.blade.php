@extends('admin.layouts.app')

@section('header')

<!-- data tables css -->
<link rel="stylesheet" href="{{asset('assets/plugins/data-tables/css/datatables.min.css')}}">

@endsection

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
                                <th>Tài khoản</th>
                                <th>Video</th>
                                <th>Lượt thích</th>
                                <th>Nội dung</th>
                                <th>Ngày đăng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dangtins as $dangtin)
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>{{$dangtin->tai_khoan_id}}</td>
                                <td>
                                    <video width="200px" controls>
                                        <source src="{{ Storage::url($dangtin->video) }}" type="video/mp4">
                                    </video>
                                </td>
                                <td>{{$dangtin->luot_thich}}</td>
                                <td>{{$dangtin->noi_dung}}</td>
                                <td>{{$dangtin->created_at}}</td>
                                <td>
                                    <a href="#!"><i class="icon feather icon-edit f-16 text-c-green"></i></a>
                                    <a href="#!"><i class="feather icon-trash-2 f-16 ms-3 text-c-red"></i></a>
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