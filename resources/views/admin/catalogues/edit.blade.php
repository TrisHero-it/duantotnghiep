@extends('admin.layouts.app')

@section('header')
<link rel="stylesheet" href="{{asset('assets/js/plugins/uppy/uppy.min.css')}}">
@endsection


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
                        <form action="{{route('catalogues.update', $danhmuc -> id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-6">
                                <label class="form-label" for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="ten_danh_muc" class="form-control" value="{{$danhmuc->ten_danh_muc}}">
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Ảnh đại diện</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <img src="{{Storage::url($danhmuc->image)}}" alt="">
                                        </div>
                                        <div class="pc-uppy" id="pc-uppy-3">
                                            <div class="pc-uppy-drag"></div>
                                            <div class="pc-uppy-informer"></div>
                                            <div class="pc-uppy-progress"></div>
                                            <div class="pc-uppy-thumbnails"></div>
                                        </div>
                                    </div>
                                </div>
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


@section('script')

<script src="{{asset('assets/js/plugins/uppy/uppy.min.js')}}"></script>
<script>
    $(function() {
        var id = '#pc-uppy-3';
        var uppyDrag = Uppy.Core({
            autoProceed: true,
            restrictions: {
                maxFileSize: 200000000, // 1mb
                maxNumberOfFiles: 5,
                minNumberOfFiles: 1,
                allowedFileTypes: ['image/*', 'video/*']
            }
        });
        uppyDrag.use(Uppy.DragDrop, {
            target: id + ' .pc-uppy-drag'
        });
        uppyDrag.use(ProgressBar, {
            target: id + ' .pc-uppy-progress',
            hideUploadButton: false,
            hideAfterFinish: false
        });
        uppyDrag.use(Informer, {
            target: id + ' .pc-uppy-informer'
        });
        uppyDrag.use(Tus, {
            endpoint: 'https://master.tus.io/files/'
        });
        uppyDrag.on('complete', function(file) {
            var imagePreview = "";
            $.each(file.successful, function(index, value) {
                var imageType = /image/;
                var thumbnail = "";
                if (imageType.test(value.type)) {
                    thumbnail = '<div class="pc-uppy-thumbnail"><img src="' + value.uploadURL + '"/></div>';
                }
                var sizeLabel = "bytes";
                var filesize = value.size;
                if (filesize > 1024) {
                    filesize = filesize / 1024;
                    sizeLabel = "kb";
                    if (filesize > 1024) {
                        filesize = filesize / 1024;
                        sizeLabel = "MB";
                    }
                }
                imagePreview += '<div class="pc-uppy-thumbnail-container" data-id="' + value.id + '"><div class="card border mb-3"><div class="p-2"><div class="media align-items-center">' + thumbnail +
                    '<div class="media-body"> <span class="pc-uppy-thumbnail-label">' + value.name + ' (' + Math.round(filesize, 2) + ' ' +
                    sizeLabel + ')</span></div><span data-id="' + value.id + '" class="pc-uppy-remove-thumbnail"><i class="feather icon-x-circle text-danger f-20"></i></div></div></div></div>';
            });

            $(id + ' .pc-uppy-thumbnails').append(imagePreview);
        });
        $(document).on('click', id + ' .pc-uppy-thumbnails .pc-uppy-remove-thumbnail', function() {
            var imageId = $(this).attr('data-id');
            uppyDrag.removeFile(imageId);
            $(id + ' .pc-uppy-thumbnail-container[data-id="' + imageId + '"').remove();
        });
    });
</script>
@endsection