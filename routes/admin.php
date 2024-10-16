<?php

<<<<<<< HEAD
use App\Http\Controllers\DangTinController;
=======
use App\Http\Controllers\PlayerController;
>>>>>>> f41026325a3df9394a9388cb804c4bac71732d5b
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
Route::get('/', function () {
    return view('admin.naptiens.index');
});

Route::get('/dangtins', [DangTinController::class,'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class,'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class,'store'])->name('dangtins.store');
=======


Route::resource('players', PlayerController::class);
>>>>>>> f41026325a3df9394a9388cb804c4bac71732d5b
