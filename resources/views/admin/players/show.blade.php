@extends('admin.layouts.app')


@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Chi tiết player</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="GET" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="">Ảnh đại diện</label><br>
                            <img src="{{ Storage::url($player -> taiKhoan -> anh_dai_dien) }}" alt="Ảnh đại diện" width="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Ảnh</label>
                            <input type="text" class="form-control" value="{{ $player -> taiKhoan -> anh_dai_dien }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Giá tiền</label>
                            <input type="number" class="form-control" value="{{ $player -> gia_tien }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Trạng thái</label>
                            <input type="text" class="form-control" value="{{ $player -> trang_thai_player }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số tài khoản</label>
                            <input type="number" class="form-control" value="{{ $player -> so_tai_khoan }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Thông tin</label>
                            <input type="" class="form-control" value="{{ $player -> thong_tin }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số người theo dõi</label>
                            <input type="number" class="form-control" value="{{ $player -> so_nguoi_theo_doi }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số giờ được thuê</label>
                            <input type="number" class="form-control" value="{{ $player -> so_gio_duoc_thue }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số lần được thuê</label>
                            <input type="number" class="form-control" value="{{ $player -> so_lan_duoc_thue }}">
                        </div>
                        
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input input-primary" id="exampleCheck1">
                            <label for="exampleCheck1">Check me out</label>
                        </div> --}}
                        
                    </form>
                    </div>
                    <div class="col-md-6">
                        <form method="GET" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="">Tên</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> ten }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Ngày sinh</label>
                                <input type="datetime" class="form-control" value="{{ $player -> taiKhoan -> ngay_sinh }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Biệt danh</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> biet_danh }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Giới tính</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> gioi_tinh }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control" value="{{ $player -> taiKhoan -> email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Số điện thoại</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> sdt }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Căn cước công dân</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> cccd }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Số dư</label>
                                <input type="number" class="form-control" value="{{ $player -> taiKhoan -> so_du }}">
                            </div>
                            
                            {{-- <div class="mb-3">
                                <label class="form-label" for="">Trạng thái</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> bi_cam }}">
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label" for="">Phân quyền</label>
                                <input type="text" class="form-control" value="{{ $player -> taiKhoan -> phanQuyen -> ten }}">
                            </div>
                        </form>
                    </div>
                    
                </div>
                <a href="{{ route('players.index') }}"><button type="" class="btn btn-primary mb-4 text-center">Trở về</button></a>
            </div>
        </div>
 
    <!-- [ form-element ] end -->
</div>

@endsection