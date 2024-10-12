<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDangTinRequest;
use App\Models\DangTin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DangTinController extends Controller
{
    const PATH_UPLOAD = "public/video";
    public function index()
    {
        $dangtins = DangTin::all();

        return view('admin.dangtins.index', compact('dangtins')); 
    }

    public function create()
    {

        return view('admin.dangtins.create');
    }

    public function store(StoreDangTinRequest $request)
    {
        $validate = $request->validated();

        $data = $request->except('video');

        if($request->hasFile('video')){
            $data['video'] = Storage::put(self::PATH_UPLOAD,$request->file('video'));
        }
        DangTin::create($data);

        return redirect()->route('dangtins.index');
    }
}
