<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\obatController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\pembayaranController;

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
    return view('home');
})->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';

Route::get('/home', function(){
    return view('home');
})->middleware(['auth', 'verified']);

Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth', 'verified']);

Route::get('/lokasi', function(){
    return view('lokasi');
})->middleware(['auth', 'verified']);


Route::get('/pasien', [pasienController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/pasien-add',[pasienController::class,'create'])->middleware(['auth', 'verified']);
Route::post('/pasien',[pasienController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/pasien-edit/{id}',[pasienController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('/pasien/{id}',[pasienController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/pasien/{id}',[pasienController::class,'destroy'])->middleware(['auth', 'verified']);
Route::get('/pasien-deleted',[pasienController::class,'deletedPasien'])->middleware(['auth', 'verified']);
Route::get('/pasien/{id}/restore',[pasienController::class,'restore'])->middleware(['auth', 'verified']);

Route::get('/pelayanan',[pelayananController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/pelayanan-add',[pelayananController::class,'create'])->middleware(['auth', 'verified']);
Route::post('/pelayanan',[pelayananController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/pelayanan-edit/{id}',[pelayananController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('/pelayanan/{id}',[pelayananController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/pelayanan/{id}',[pelayananController::class,'destroy'])->middleware(['auth', 'verified']);


Route::get('/pembayaran',[pembayaranController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/pembayaran-add',[pembayaranController::class,'create'])->middleware(['auth', 'verified']);
Route::post('/pembayaran',[pembayaranController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/pembayaran-edit/{id}',[pembayaranController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('/pembayaran/{id}',[pembayaranController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/pembayaran/{id}',[pembayaranController::class,'destroy'])->middleware(['auth', 'verified']);

Route::get('/pegawai',[pegawaiController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/pegawai-add',[pegawaiController::class,'create'])->middleware(['auth', 'verified']);
Route::post('/pegawai',[pegawaiController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/pegawai-edit/{id}',[pegawaiController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('/pegawai/{id}',[pegawaiController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/pegawai/{id}',[pegawaiController::class,'destroy'])->middleware(['auth', 'verified']);

Route::get('/obat',[obatController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/obat-add',[obatController::class,'create'])->middleware(['auth', 'verified']);
Route::post('/obat',[obatController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/obat-edit/{id}',[obatController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('obat/{id}',[obatController::class,'update'])->middleware(['auth', 'verified']);
Route::delete('/obat/{id}',[obatController::class,'destroy'])->middleware(['auth', 'verified']);

