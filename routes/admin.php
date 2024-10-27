<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ToCaoController;



Route::get('/tocaos', [ToCaoController::class, 'index'])->name('tocao.index');
Route::delete('/tocaos/{complaint}', [ToCaoController::class, 'destroy'])->name('tocaos.destroy');
Route::patch('/tocaos/{complaint}', [ToCaoController::class, 'updateStatus'])->name('tocao.updateStatus');
Route::get('/tocaos/add', [ToCaoController::class, 'create'])->name('tocao.add');
Route::post('/tocaos/add', [ToCaoController::class, 'store'])->name('tocao.store');


Route::prefix('admin')->name('admin.')->group(function () {

        // // Kiểm tra nếu chưa đăng nhập thì chuyển hướng về trang login
        // Route::get('/{any?}', function () {
        //     if (!Session::has('admin_id')) {
        //         return redirect()->route('admin.login');
        //     }
        // })->where('any', '.*'); // Để xử lý tất cả các route bên dưới

        Route::controller(CommentController::class)->group(function () {
                Route::get('comments', 'index')->name('comments.index');
                Route::post('comment/updateStatus',  'updateStatus')->name('comments.updateStatus');

                Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
                Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
                Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');
                Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
                Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
                Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');


                Route::get('/catalogues', [CatalogueController::class, 'index'])->name('catalogues.index');
                Route::get('/catalogues/create', [CatalogueController::class, 'create'])->name('catalogues.create');
                Route::post('/catalogues/store', [CatalogueController::class, 'store'])->name('catalogues.store');
                Route::get('/catalogues/{id}/edit', [CatalogueController::class, 'edit'])->name('catalogues.edit');
                Route::put('/catalogues/{id}', [CatalogueController::class, 'update'])->name('catalogues.update');
                Route::delete('/catalogues/{id}', [CatalogueController::class, 'destroy'])->name('catalogues.destroy');


                Route::resource('catalogues', CatalogueController::class);


                Route::get('/tocaos', [ToCaoController::class, 'index'])->name('tocao.index');
                Route::delete('/tocaos/{complaint}', [ToCaoController::class, 'destroy'])->name('tocaos.destroy');
                Route::patch('/tocaos/{complaint}', [ToCaoController::class, 'updateStatus'])->name('tocao.updateStatus');
                Route::get('/tocaos/add', [ToCaoController::class, 'create'])->name('tocao.add');
                Route::post('/tocaos/add', [ToCaoController::class, 'store'])->name('tocao.store');



                Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('taikhoans.index');
                Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('taikhoans.create');
                Route::get('/taikhoans/show/{id}', [TaiKhoanController::class, 'show'])->name('taikhoans.show');
                Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('taikhoans.store');
                Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('taikhoans.edit');
                Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('taikhoans.update');
                Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('taikhoans.delete');

                Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('index');
                Route::get('/taikhoans/show/{id}', [TaiKhoanController::class, 'show'])->name('show');
                Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('create');
                Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('store');
                Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
                Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
                Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');


                Route::get('/dangtins', [DangTinController::class, 'index'])->name('dangtins.index');
                Route::get('/dangtins/create', [DangTinController::class, 'create'])->name('dangtins.create');
                Route::post('/dangtins', [DangTinController::class, 'store'])->name('dangtins.store');
                Route::delete('/dangtins/{id}', [DangTinController::class, 'store'])->name('dangtins.destroy');


                Route::resource('players', PlayerController::class);
        });

        Route::resource('catalogues', CatalogueController::class);
});

Route::get('/phuongthucthanhtoans', [PhuongThucThanhToanController::class, 'index'])->name('phuongthucthanhtoans.index');
Route::get('/phuongthucthanhtoans/create', [PhuongThucThanhToanController::class, 'create'])->name('phuongthucthanhtoans.create');
Route::post('/phuongthucthanhtoans', [PhuongThucThanhToanController::class, 'store'])->name('phuongthucthanhtoans.store');
Route::delete('/phuongthucthanhtoans/{id}/destroy', [PhuongThucThanhToanController::class, 'destroy'])->name('phuongthucthanhtoans.destroy');


Route::resource('players', PlayerController::class);
