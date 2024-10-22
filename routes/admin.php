<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CatalogueController;

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

        Route::get('comments', 'index')->name('comment.index');
        Route::post('comment/updateStatus',  'updateStatus')->name('comment.updateStatus');
    });

    Route::resource('catalogues', CatalogueController::class);
});

// Route::get('/', function () {
//     return view('admin.taikhoans.index');
// });
Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('admin.taikhoans.index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('admin.taikhoans.create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('admin.taikhoans.store');
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('admin.taikhoans.edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('admin.taikhoans.update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('admin.taikhoans.delete');

Route::get('/dangtins', [DangTinController::class, 'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class, 'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class, 'store'])->name('dangtins.store');


Route::resource('players', PlayerController::class);