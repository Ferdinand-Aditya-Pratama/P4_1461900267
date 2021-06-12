<?php

use\App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/buku/export', [BukuController::class, 'bukuexport']);
Route::resource('buku', BukuController::class);
Route::resource('tambah0267', BukuController::class);
Route::resource('edit0267', BukuController::class);