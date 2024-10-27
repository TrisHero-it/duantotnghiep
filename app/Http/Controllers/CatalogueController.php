<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Requests\Catalogues\{
    CatalogueStoreRequest,
    CatalogueUpdateRequest
};
use App\Models\Danhmuc;
use App\Models\Player;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    const PATH_UPLOAD = "public/image";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogues = Danhmuc::all();
        return view('admin.catalogues.index', compact( 'catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catalogues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validated();

        $data = $request->except('image');

        if($request->hasFile('image')){
            $data['image'] = Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }

        // dd($request->all());
        Danhmuc::create($data);

        return redirect()->route('catalogues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Danhmuc $catalogue)
    {
        dd($catalogue);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Danhmuc $id)
    {
        $danhmuc = Danhmuc::findOrFail($id);

        return view('admin.catalogues.edit', compact('danhmuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Danhmuc $id)
    {
        $danhmuc = Danhmuc::findOrFail($id);
        $data = $request->except('image');

        if($request->hasFile('image')){
            Storage::disk('public')->delete($request->image);
            $data['image'] = Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }
        $danhmuc->update($data);
        return redirect()->route('admin.catalogues.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Danhmuc $id)
    {
        $danhmuc = Danhmuc::findOrFail($id);
        $danhmuc->delete();
        return redirect()->route('catalogues.index');
    }
}