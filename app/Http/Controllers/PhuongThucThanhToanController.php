<?php

namespace App\Http\Controllers;

use App\Models\PhuongThucThanhToan;
use Illuminate\Http\Request;

class PhuongThucThanhToanController extends Controller
{
    public function index()
    {
        $phuongthucthanhtoans = PhuongThucThanhToan::all();
        return view("admin.phuongthucthanhtoans.index", compact('phuongthucthanhtoans'));
    }
}
