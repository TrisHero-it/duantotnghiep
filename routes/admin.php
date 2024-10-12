<?php

use App\Http\Controllers\TaiKhoanController;
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

Route::get('/', function () {
    return view('admin.taikhoans.index');
});
Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('store');
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');
