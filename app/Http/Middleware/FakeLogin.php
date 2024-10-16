<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FakeLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Chỉ thực hiện trong môi trường phát triển
        if (app()->environment('local')) {
            // Kiểm tra nếu chưa có người dùng nào đăng nhập
            if (!Auth::check()) {
                // Giả lập người dùng đăng nhập với ID 1 (hoặc bạn có thể thay đổi ID này)
                Auth::loginUsingId(1);
            }
        }

        return $next($request);
    }
}
