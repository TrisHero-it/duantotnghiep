@extends('admin.layouts.app')

@section('title', $title)


@section('content')
    <div class="custom-color">
        <form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-9">
                    <div class="card ">
                        <div class="card-header">
                            <h5>{{ $title }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label d-block" for="">Tên danh mục</label>
                                <input type="text" value="{{ old('name') }}" name="name" id="" placeholder="Nhập tên danh mục.."
                                    class="form-control  @error('name') is-invalid @enderror">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label d-block" for="">Trạng thái</label>
                                <div class="radio-container">
                                    <label class="toggle">
                                        <input name="published" type="checkbox" class="status-change" value="1"
                                            {{ old('published', '0') == '1' ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                @error('published')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-0 float-end">Thêm</button>

                </div>

                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-header">
                            <h5>Ảnh tiêu biểu</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-4 form-group w-100">
                                <img class="img-fluid img-thumbnail w-100" id="show_image"
                                    style="height: 182.462px;cursor: pointer" src="{{ showImage('') }}" alt=""
                                    onclick="document.getElementById('image').click();">
                                <input type="file" name="image" id="image" class="form-control file-input"
                                    accept="image/*" onchange="previewImage(event, 'show_image')">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- [ form-element ] end -->
    </div>
@endsection





@push('styles')
    <style>

    </style>
@endpush


@push('scripts')
@endpush
