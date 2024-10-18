<?php
<<<<<<< HEAD

<<<<<<< HEAD
use App\Http\Controllers\TaiKhoanController;
=======
use App\Http\Controllers\CommentController;
=======
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PlayerController;
>>>>>>> 652cbcc88f876950b157fc5c00a45886bb671b38
>>>>>>> f3abf0612ac3ea96e459bea71b44a98eab6442cd
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

<<<<<<< HEAD
Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(CommentController::class)->group(function () {

        Route::get('comment', 'index')->name('comment.index');
        Route::post('comment/updateStatus',  'updateStatus')->name('comment.updateStatus');

    });
});

=======
Route::get('/', function () {
    return view('admin.taikhoans.index');
});
<<<<<<< HEAD
Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('store');
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('delete');
=======

Route::get('/dangtins', [DangTinController::class,'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class,'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class,'store'])->name('dangtins.store');


Route::resource('players', PlayerController::class);
>>>>>>> 652cbcc88f876950b157fc5c00a45886bb671b38
>>>>>>> f3abf0612ac3ea96e459bea71b44a98eab6442cd
