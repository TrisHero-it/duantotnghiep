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
                    return $row->trang_thai == 1 ? '<span class="btn btn-success btn-sm">Đã duyệt</span>' : '<span class="btn btn-danger btn-sm">Chưa duyệt></span>';
                })
                ->addColumn('email', function ($row) {
                    return $row->user->email;
                })
                ->addColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->locale('vi')->diffForHumans();
                })
                ->rawColumns(['trang_thai'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.comments.index');
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
