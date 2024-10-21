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

    public function create()
    {
        return view('admin.phuongthucthanhtoans.create');
    }

    public function store(Request $request)
    {
        PhuongThucThanhToan::create($request->all());
        return redirect()->route('phuongthucthanhtoans.index');
    }

    public function destroy($id)
    {
        $phuongthucthanhtoan = PhuongThucThanhToan::findOrFail($id);
        $phuongthucthanhtoan->delete();
        return redirect()->route('phuongthucthanhtoans.index');
    }
}
