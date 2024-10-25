@extends('admin.layouts.app')


@section('title', $title)


@section('content')
    <table class="table table striped table-hover display" id="myTable">
        <thead>
            <th>#</th>
            <th>Email</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Thời gian bình luận</th>
            <th>Hành động</th>

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
            ajax: '{{ route('admin.comments.index') }}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'noi_dung',
                    name: 'noi_dung'
                },
                {
                    data: 'trang_thai',
                    name: 'trang_thai'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ],
            order: [
                [0, 'desc']
            ],
        });




        $(document).on('change', '.update-status', function() {

            function showToast(icon, title) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                Toast.fire({
                    icon: icon,
                    title: title
                });
            }

            const id = $(this).data('id');

            let checkbox = $(this);
            let isChecked = checkbox.is(':checked');

            let newStatus = isChecked ? 1 : 0;

            Swal.fire({
                title: 'Xác nhận',
                text: newStatus == 1 ? "Bạn có chắc chắn muốn ẩn bình luận?" :
                    "Bạn có chắc chắn muốn ẩn bình luận?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, cập nhật!',
                cancelButtonText: 'Không'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Gửi yêu cầu cập nhật trạng thái
                    $.ajax({
                        url: '{{ route('admin.comments.updateStatus') }}', // Đường dẫn đến route cập nhật trạng thái
                        type: 'POST',
                        data: {
                            id: id,
                        },
                        success: function(response) {
                            if (response.status) {
                                $('#myTable').DataTable().ajax.reload();
                                showToast('success', response.message);
                            } else {
                                showToast('error', response.message);
                            }
                        },
                        error: function() {
                            Swal.fire('Lỗi!', 'Có lỗi xảy ra. Vui lòng thử lại.', 'error');
                        }
                    });
                } else {
                    checkbox.prop('checked', !isChecked);
                }
            });
        });
    </script>
@endpush
