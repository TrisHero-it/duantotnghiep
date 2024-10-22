<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Http\Requests\Catalogues\{
    CatalogueStoreRequest,
    CatalogueUpdateRequest
};

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách danh mục";

        $catalogues = Catalogue::query()->latest()->paginate(10);
        return view('admin.catalogues.index', compact('title', 'catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm danh mục";
        return view('admin.catalogues.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogueStoreRequest $request)
    {
        $crentials = $request->validated();
        if ($request->hasFile('image')) {
            $crentials['image'] = saveImages($request, 'image', 'catalogues', 300, 300);
        }

        if (empty($crentials['published'])) {
            $crentials['published'] = 0;
        }

        Catalogue::create($crentials);

        session()->flash('success', 'Thêm danh mục thành công');
        return redirect()->route('admin.catalogues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalogue $catalogue)
    {
        dd($catalogue);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalogue $catalogue)
    {
        $title = "Cập nhật danh mục";
        return view('admin.catalogues.edit', compact('catalogue', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogueUpdateRequest $request, Catalogue $catalogue)
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
    public function destroy(Catalogue $catalogue)
    {
        if ($catalogue->image) {
            deleteImage($catalogue->image);
        }

        $catalogue->delete();

        session()->flash('success', 'Xóa danh mục thành công');
        return redirect()->route('admin.catalogues.index');
    }
}