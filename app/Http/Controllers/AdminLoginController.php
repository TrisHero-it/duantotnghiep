<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan; // Model của bạn
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Chỉ định view của trang đăng nhập
    }

    public function login(Request $request)
    {
        // Xác thực thông tin đăng nhập
        $request->validate([
            'email' => 'required|email',
            'mat_khau' => 'required',
        ]);

        // Tìm tài khoản theo email
        $taikhoan = TaiKhoan::where('email', $request->email)->first();

        if ($taikhoan && Hash::check($request->mat_khau, $taikhoan->mat_khau)) {
            // Lưu thông tin người dùng vào session
            Session::put('admin_id', $taikhoan->id);
            return redirect()->route('admin.tocao.index');
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }


    public function logout()
    {
        Session::forget('admin_id'); // Xóa thông tin khỏi session
        return redirect()->route('auth.login'); // Chuyển hướng về trang đăng nhập
    }
}
