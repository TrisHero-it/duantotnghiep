<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ToCaoController;


Route::prefix('admin')->name('admin.')->group(function () {


    Route::controller(CommentController::class)->group(function () {
        Route::get('comments', 'index')->name('comment.index');
        Route::post('comment/updateStatus',  'updateStatus')->name('comment.updateStatus');

        Route::resource('catalogues', CatalogueController::class);
        Route::get('/tocaos', [ToCaoController::class, 'index'])->name('tocao.index');
        Route::delete('/tocaos/{complaint}', [ToCaoController::class, 'destroy'])->name('tocaos.destroy');
        Route::patch('/tocaos/{complaint}', [ToCaoController::class, 'updateStatus'])->name('tocao.updateStatus');
        Route::get('/tocaos/add', [ToCaoController::class, 'create'])->name('tocao.add');
        Route::post('/tocaos/add', [ToCaoController::class, 'store'])->name('tocao.store');

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
