<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Requests\Catalogues\{
    CatalogueStoreRequest,
    CatalogueUpdateRequest
};
use App\Models\Danhmuc;
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
    public function store(CatalogueStoreRequest $request)
    {
        $validate = $request->validated();

        $data = $request->except('image');

        if($request->hasFile('image')){
            $data['image'] = Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }
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
    public function edit(Danhmuc $catalogue)
    {
        $title = "Cập nhật danh mục";
        return view('admin.catalogues.edit', compact('catalogue', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogueUpdateRequest $request, Danhmuc $catalogue)
    {
        $crentials = $request->validated();
        if ($request->hasFile('image')) {
            $catalogue->image ?: deleteImage($catalogue->image);
            $crentials['image'] = saveImages($request, 'image', 'catalogues', 300, 300);
        }

        if (empty($crentials['published'])) {
            $crentials['published'] = 0;
        }
        $catalogue->update($crentials);

        session()->flash('success', 'Cập nhật danh mục thành công');
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
