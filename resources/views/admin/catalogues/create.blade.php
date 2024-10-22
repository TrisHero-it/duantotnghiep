@extends('admin.layouts.app')

@section('title', $title)


@section('content')
<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Thêm danh mục</h5>
            </div>
            <div class="card-body">
                <div class="col12">
                    <div class="row">
                        <form action="{{route('catalogues.store')}}" method="post">
                            @csrf
                            <div class="col-6">
                                <label class="form-label" for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="ten_danh_muc" class="form-control" placeholder="Ten danh muc">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Ảnh đại diện</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection