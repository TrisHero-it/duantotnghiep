<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ToCaoController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Session;

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');


Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');


Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/{any?}', function () {
        if (!Session::has('admin_id')) {
            return redirect()->route('admin.login');
        }
    })->where('any', '.*');

    Route::controller(CommentController::class)->group(function () {
        Route::get('comments', 'index')->name('comment.index');
        Route::post('comment/updateStatus',  'updateStatus')->name('comment.updateStatus');

        Route::resource('catalogues', CatalogueController::class);
        Route::get('/tocaos', [ToCaoController::class, 'index'])->name('admin.tocao.index');

        Route::patch('/tocaos/{complaint}', [ToCaoController::class, 'updateStatus'])->name('admin.tocao.updateStatus');
        Route::get('/tocaos/add', [ToCaoController::class, 'create'])->name('admin.tocao.add');
        Route::post('/tocaos/add', [ToCaoController::class, 'store'])->name('admin.tocao.store');

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
    });
});
