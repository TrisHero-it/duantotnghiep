<?php

use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Http\Controllers\PlayerController;
use App\Models\PhuongThucThanhToan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(CommentController::class)->group(function () {

        Route::get('comment', 'index')->name('comment.index');
        Route::post('comment/updateStatus',  'updateStatus')->name('comment.updateStatus');

    });
});

Route::get('/', function () {
    return view('admin.taikhoans.index');
});
Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('store');
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');

Route::get('/dangtins', [DangTinController::class,'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class,'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class,'store'])->name('dangtins.store');
Route::delete('/dangtins/{id}/destroy', [DangTinController::class,'destroy'])->name('dangtins.destroy');

Route::get('/phuongthucthanhtoans', [PhuongThucThanhToanController::class,'index'])->name('phuongthucthanhtoans.index');
Route::get('/phuongthucthanhtoans/create', [PhuongThucThanhToanController::class,'create'])->name('phuongthucthanhtoans.create');
Route::post('/phuongthucthanhtoans', [PhuongThucThanhToanController::class,'store'])->name('phuongthucthanhtoans.store');
Route::delete('/phuongthucthanhtoans/{id}/destroy', [PhuongThucThanhToanController::class,'destroy'])->name('phuongthucthanhtoans.destroy');

Route::resource('players', PlayerController::class);
