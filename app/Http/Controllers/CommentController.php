<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Models\Player;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $binhluans = BinhLuan::all();
        $taikhoans = TaiKhoan::all();
        $players = Player::all();
        
        return view('admin.comments.index', compact('binhluans', "taikhoans", 'players'));
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
