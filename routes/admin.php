<?php

use App\Http\Controllers\CommentController;
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

