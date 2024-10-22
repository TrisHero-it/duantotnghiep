@extends('admin.layouts.app')

@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Thêm phương thức thanh toán</h5>
            </div>
            <div class="card-body">
                <div class="col12">
                    <div class="row">
                        <form action="{{route('phuongthucthanhtoans.store')}}" method="post">
                            @csrf
                            <div class="col-6">
                                <label class="form-label" for="exampleInputEmail1">Tên phương thức</label>
                                <input type="text" name="ten_phuong_thuc" class="form-control" placeholder="Ten phuong thuc">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Số tài khoản</label>
                                <input type="text" name="so_tai_khoan" class="form-control" placeholder="So tai khoan">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ form-element ] end -->
</div>

@endsection