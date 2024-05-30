<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('siswa', SiswaController::class)
    ->except(['show']);

Route::resource('kela', KelasController::class)
    ->except(['show']);

Route::resource('pembayaran', PembayaranController::class)
    ->except(['show']);

Route::resource('spp', SppController::class)
    ->except(['show']);

route::resource('user', UserController::class)
    ->except('destroy','Create','show','update','edit');