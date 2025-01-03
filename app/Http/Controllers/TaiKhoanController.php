<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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

<<<<<<< HEAD
        $taikhoans->update($anh_dai_dien);
        return redirect()->route('index');
      }


      public function show($id){
        $taikhoan = TaiKhoan::find($id); 
        return view('admin.taikhoans.show', compact('taikhoan')); 
=======
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
        $dataToUpdate = $request->except('anh_dai_dien');

        // Kiểm tra nếu có mật khẩu mới và băm nó
        if ($request->filled('mat_khau')) {
            $dataToUpdate['mat_khau'] = Hash::make($request->mat_khau);
        }

        if ($request->hasFile('anh_dai_dien')) {
            if ($taikhoans->anh_dai_dien) {
                Storage::disk("public")->delete($taikhoans->anh_dai_dien);
            }
            $dataToUpdate['anh_dai_dien'] = Storage::put(self::path_upload, $request->file('anh_dai_dien'));
        }

        // Cập nhật thông tin tài khoản
        $taikhoans->update($dataToUpdate);
        return redirect()->route('index')->with('success', 'Cập nhật tài khoản thành công!');
>>>>>>> 282599ba7b15ef5fb6df3e5c451fd471c4a13c99
    }
}
