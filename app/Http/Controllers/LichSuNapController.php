<?php

namespace App\Http\Controllers;

use App\Models\LichSuNap;
use Illuminate\Http\Request;

class LichSuNapController extends Controller
{
    public function index()
    {
        $lichSuNaps = LichSuNap::get();

        return view("admin.lichsunaps.index", compact('lichSuNaps'));
    }
}
