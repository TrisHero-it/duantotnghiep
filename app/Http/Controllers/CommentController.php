<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (request()->ajax()) {
            return datatables()->of(BinhLuan::with('user')->get())
                ->addColumn('trang_thai', function ($row) {
                    return '
                    <div class="radio-container">
                        <label class="toggle">
                            <input type="checkbox" class="status-change update-status" data-id="' . $row->id . '" ' . ($row->trang_thai ? 'checked' : '') . '>
                            <span class="slider"></span>
                        </label>
                    </div>
                ';
                })
                ->addColumn('email', function ($row) {
                    return $row->user->email;
                })
                ->addColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->locale('vi')->diffForHumans();
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm" >
                               Xem chi tiết
                            </button>
                        </div>
                    ';
                })
                ->rawColumns(['trang_thai', 'action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.comments.index');
    }
    function updateStatus(Request $request)
    {

        $comment = BinhLuan::find($request->id);

        if (!$comment) {
            return response()->json([
                'status' => false,
                'message' => 'Đã có lỗi xảy ra. Vui lòng thử lại sau ít phút!'
            ]);
        }

        $comment->trang_thai = !$comment->trang_thai;
        $comment->save();

        return response()->json([
            'status' => true,
            'message' => 'Cập nhật thành công'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
