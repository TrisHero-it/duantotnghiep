<?php

use App\Http\Controllers\ToCaoController;
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

Route::get('/tocaos', [ToCaoController::class, 'index'])->name('admin.tocao.index');

Route::patch('/tocaos/{complaint}', [ToCaoController::class, 'updateStatus'])->name('admin.tocao.updateStatus');
Route::get('/tocaos/add', [ToCaoController::class, 'create'])->name('admin.tocao.add');
Route::post('/tocaos/add', [ToCaoController::class, 'store'])->name('tocao.store');
