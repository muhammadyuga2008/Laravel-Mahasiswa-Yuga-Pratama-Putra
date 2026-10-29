<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthsController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/registrasi',[AuthsController::class,'registrasi'])->name('registrasi');
Route::post('/postregist',[AuthsController::class,'postregist'])->name('postregist');
 
Route::get('/',[AuthsController::class,'login'])->name('login');
Route::post('/postlogin',[AuthsController::class,'postlogin'])->name('postlogin');

Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[AuthsController::class,'logout'])->name('logout');
    //Route Mahasiswa
    Route::get('/mahasiswaView',[mahasiswaController::class,'mahasiswaView'])->name('mahasiswaView');
    Route::post('/postmahasiswa',[mahasiswaController::class,'postmahasiswa'])->name('postmahasiswa');
    Route::get('/riwayat',[mahasiswaController::class,'riwayat'])->name('riwayat');
    Route::get('/fakultas',[mahasiswaController::class,'fakultas'])->name('fakultas');

    //Route Mahasiswa Edit Data
    Route::get('/edit/{id}',[mahasiswaController::class,'edit'])->name('edit');
    Route::put('/postedit/{id}',[mahasiswaController::class,'postedit'])->name('postedit');

    //Route Mahasiswa Pembayaran
    Route::get('/pembayaran',[mahasiswaController::class,'pembayaran'])->name('pembayaran');


    //Route Admin
    Route::get('/laporan',[AdminController::class,'laporan'])->name('laporan');

});