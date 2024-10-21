@extends('admin.layouts.app')


@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Tổ cáo người chơi</h5>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên người tố cáo</th>
                                <th>Tên người bị tố cáo</th>
                                <th>Nội dung tố cáo</th>
                                <th>Trang thái</th>
                                <th>Xét duyệt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($complaints as $complaint)
                                <tr>
                                    <td>{{ $complaint->id }}</td>
                                    <td>{{ $complaint->user->ten }}</td>
                                    <td>{{ $complaint->player->ten }}</td>
                                    <td>{{ $complaint->noi_dung_to_cao }}</td>
                                    <td>{{ ucfirst($complaint->trang_thai) }}</td>
                                    <td>
                                        <form action="{{ route('tocao.updateStatus', $complaint->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <div class="form-group">
                                                <select name="trang_thai" class="form-control" required>
                                                    <option value="Chờ xử lí"
                                                        {{ $complaint->status == 'Chờ xử lí' ? 'selected' : '' }}>Chờ xử lí
                                                    </option>
                                                    <option value="Đang xử lí"
                                                        {{ $complaint->status == 'Đang xử lí' ? 'selected' : '' }}>Đang xử
                                                        lí
                                                    </option>
                                                    <option value="Thành công"
                                                        {{ $complaint->status == 'Thành công' ? 'selected' : '' }}>Thành
                                                        công
                                                    </option>
                                                    <option value="Thất bại"
                                                        {{ $complaint->status == 'Thất bại' ? 'selected' : '' }}>Thất bại
                                                    </option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tên người tố cáo</th>
                                <th>Tên người bị tố cáo</th>
                                <th>Nội dung tố cáo</th>
                                <th>Trang thái</th>
                                <th>Xét duyệt</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
