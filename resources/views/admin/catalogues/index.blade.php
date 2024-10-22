@extends('admin.layouts.app')

@section('title', $title)

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ $title }}</h5>
            <a href="{{ route('admin.catalogues.create') }}" class="btn btn-sm btn-primary">Thêm mới (+)</a>
        </div>

        <div class="card-body">
            <table class="table table striped table-hover display" id="myTable">
                <thead>
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>

                </thead>
                <tbody>
                    @forelse ($catalogues as $catalogue)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img class="img-fluid" style="width: 100px" src="{{ showImage($catalogue->image) }}"
                                    alt=""></td>
                            <td>{{ $catalogue->name }}</td>
                            <td>
                                <div class="radio-container">
                                    <label class="toggle">
                                        <input type="checkbox" class="status-change update-status"
                                            @checked($catalogue->published)>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </td>

                            <td>
                                <form action="{{ route('admin.catalogues.destroy', $catalogue) }}" method="post"
                                    id="delete-form-{{ $catalogue->id }}" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="confirmDelete(event, '{{ $catalogue->id }}')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('admin.catalogues.edit', $catalogue) }}"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .btn>i {
            margin-right: 0 !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function confirmDelete(event, catalogueId) {
            event.preventDefault(); // Ngăn việc submit form ngay lập tức

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + catalogueId).submit();
                }
            });
        }
    </script>
@endpush
