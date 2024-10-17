@extends('admin.layouts.app')


@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Thêm player</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- <div class="mb-3">
                            <label class="form-label" for="">Ảnh</label>
                            <input type="file" class="form-control" name="anh">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Thông tin</label>
                            <input type="text" class="form-control" name="thong_tin">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số giờ được thuê</label>
                            <input type="number" class="form-control" name="so_gio_duoc_thue">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số người theo dõi</label>
                            <input type="number" class="form-control" name="so_nguoi_theo_doi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Giá tiền</label>
                            <input type="number" class="form-control" name="gia_tien">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Trạng thái</label>
                            <input type="text" class="form-control" name="trang_thai_player">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Tài khoản ID</label>
                            <input type="number" class="form-control" name="tai_khoan_id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số tài khoản</label>
                            <input type="number" class="form-control" name="so_tai_khoan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Số lần được thuê</label>
                            <input type="number" class="form-control" name="so_lan_duoc_thue">
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label" for="">Số lần được thuê</label>
                            <input type="number" class="form-control" name="so_lan_duoc_thue">
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input input-primary" id="exampleCheck1">
                            <label for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary mb-4">Thêm</button>
                    </form>
                    {{-- <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Text</label>
                                <input type="text" class="form-control" placeholder="Text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
 
    <!-- [ form-element ] end -->
</div>

@endsection