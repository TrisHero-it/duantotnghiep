<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaiKhoanController extends Controller
{
    const path_upload = "public/uploads/tai_khoans";
    public function index(Request $request)
    {
        $taikhoans = TaiKhoan::all();
        return view('admin.taikhoans.index', compact('taikhoans'));
    }
    public function create()
    {

        return view("admin.taikhoans.create");
    }
    public function store(Request $request)
    {
        // Thêm validation
        $request->validate([
            'ten' => 'required|string|max:255',
            'ngay_sinh' => 'required|date',
            'biet_danh' => 'required|string|max:255',
            'gioi_tinh' => 'required|in:Nam,Nữ',
            'email' => 'required|email|unique:users,email',
            'sdt' => 'required|numeric|digits_between:10,15',
            'cccd' => 'required|numeric|digits:12|unique:users,cccd',
            'mat_khau' => 'required|string|min:8',
            'so_du' => 'required|numeric|min:0',
            'anh_dai_dien' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bi_cam' => 'required|in:1,2',
        ]);

        // Xử lý file ảnh và lưu vào database
        $anh_dai_diens = $request->except("anh_dai_dien");
        if ($request->hasFile("anh_dai_dien")) {
            $anh_dai_diens['anh_dai_dien'] = Storage::put(self::path_upload, $request->file('anh_dai_dien'));
        }
        $data = TaiKhoan::create($anh_dai_diens);
        return redirect()->route('index')->with('success', 'Thêm tài khoản thành công!');
    }

    public function destroy($id)
    {
        // Tìm tài khoản theo ID
        $taikhoan = TaiKhoan::findOrFail($id);

        // Xóa ảnh nếu cần
        if ($taikhoan->cccd) {
            Storage::delete($taikhoan->cccd);
        }
        if ($taikhoan->anh_dai_dien) {
            Storage::delete($taikhoan->anh_dai_dien);
        }

        // Xóa tài khoản
        $taikhoan->delete();

        // Quay lại danh sách với thông báo thành công
        return redirect()->route('index')->with('success', 'Tài khoản đã được xóa thành công!');
    }





    public function show($id)
    {
        $taikhoan = TaiKhoan::find($id);
        return view('admin.taikhoans.show', compact('taikhoan'));
        // Xóa tài khoản
        $taikhoan->delete();

        // Quay lại danh sách với thông báo thành công
        return redirect()->route('index')->with('success', 'Tài khoản đã được xóa thành công!');
    }

    public function edit(Request $request, $id)
    {
        $taikhoans = TaiKhoan::find($id);
        return view('admin.taikhoans.edit', compact('taikhoans'));
    }

    public function update(Request $request, $id)
    {
        $taikhoans = TaiKhoan::find($id);
        $anh_dai_dien = $request->except('anh_dai_dien');

        if ($request->hasFile('anh_dai_dien')) {
            if ($taikhoans->anh_dai_dien) {
                Storage::disk("public")->delete($taikhoans->anh_dai_dien);
                $anh_dai_dien['anh_dai_dien'] = Storage::put(self::path_upload, $request->file('anh_dai_dien'));
            } else {
                $anh_dai_dien['anh_dai_dien'] = $taikhoans->anh_dai_dien;
            }
        }

        $taikhoans->update($anh_dai_dien);
        return redirect()->route('index');
    }
}
