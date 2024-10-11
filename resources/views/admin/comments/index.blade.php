@extends('admin.layouts.app')

@section('content')
    <table class="table table striped table-hover display" id="myTable">
        <thead>
            <th>#</th>
            <th>Email</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Thời gian tạo</th>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
@endpush


@push('scripts')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('admin.comment.index')}}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'email', name: 'email'},
                {data: 'noi_dung', name: 'noi_dung'},
                {data: 'trang_thai', name: 'status'},
                {data: 'created_at', name: 'created_at'},
            ],
            order: [[0, 'desc']],
        });
    </script>
@endpush
