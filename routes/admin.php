<?php
<<<<<<< HEAD

use App\Http\Controllers\CommentController;
=======
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PlayerController;
>>>>>>> 652cbcc88f876950b157fc5c00a45886bb671b38
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
    return view('admin.naptiens.index');
});

Route::get('/dangtins', [DangTinController::class,'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class,'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class,'store'])->name('dangtins.store');


Route::resource('players', PlayerController::class);
>>>>>>> 652cbcc88f876950b157fc5c00a45886bb671b38
