<?php

use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Models\PhuongThucThanhToan;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ToCaoController;


Route::get('/', function () {
    return view('admin.index');
});

Route::controller(CommentController::class)->group(function () {

    Route::get('comments', 'index')->name('admin.comments.index');
    Route::post('comments/updateStatus',  'updateStatus')->name('admin.comments.updateStatus');
});

Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('store');
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');

Route::get('/dangtins', [DangTinController::class, 'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class, 'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class, 'store'])->name('dangtins.store');


Route::resource('players', PlayerController::class);
