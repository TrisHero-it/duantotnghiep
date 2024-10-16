@extends('admin.layouts.app')

@section('header')
<!-- fileupload-custom css -->
<link rel="stylesheet" href="{{asset('assets/css/pages/fileupload.css')}}">

@endsection
@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Form controls</h5>
            </div>
            <div class="card-body">
                <form action="{{route('dangtins.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label"
                                    for="exampleFormControlTextarea1">Nội dung</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    rows="3" name="noi_dung"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Video Upload</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <input type="file" name="video" accept="video/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="col-1 btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- [ form-element ] end -->
</div>

@endsection

@section('script')
<!-- file-upload Js -->
<script src="{{asset('assets/plugins/fileupload/js/dropzone-amd-module.min.js')}}"></script>

@endsection