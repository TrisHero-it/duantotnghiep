<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('admin.naptiens.index');
// });

Route::get('/', [AdminController::class, 'index'])->name('admin.tocao.index');

Route::patch('/tocaos/{complaint}', [AdminController::class, 'updateStatus'])->name('admin.tocao.updateStatus');
Route::get('/add', [AdminController::class, 'create'])->name('admin.tocao.add');
Route::post('/add', [AdminController::class, 'store'])->name('tocao.store');
