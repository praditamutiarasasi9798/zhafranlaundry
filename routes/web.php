<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TbhTransaksiController;
use App\Http\Controllers\DetTransaksiController;
use App\Http\Controllers\PembayaranController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// tambah data
Route::resource('/jabatan', JabatanController::class);

Route::resource('/paket', PaketController::class );

Route::resource('/customer', CustomerController::class);

Route::resource('/tambahtransaksi' , TbhTransaksiController::class);

Route::resource('', DetTransaksiController::class);

Route::resource('/', PembayaranController::class);


require __DIR__.'/auth.php';
