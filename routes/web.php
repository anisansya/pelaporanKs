<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminInvestigasiController;
use App\Http\Controllers\SatgasController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RekapController;


/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');



/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login',
[AuthController::class,'login'])
->name('login');


Route::post('/login',
[AuthController::class,'prosesLogin'])
->name('login.proses');


Route::get('/logout',
[AuthController::class,'logout'])
->name('logout');





/*
|--------------------------------------------------------------------------
| PENGGUNA
|--------------------------------------------------------------------------
*/

Route::prefix('pengguna')->group(function(){


    Route::get('/',
    [PenggunaController::class,'index'])
    ->name('pengguna.index');


    Route::get('/laporan/create',
    [PenggunaController::class,'create'])
    ->name('pengguna.laporan.create');


    Route::post('/laporan',
    [PenggunaController::class,'store'])
    ->name('pengguna.laporan.store');


    Route::get('/cek-status',
    [PenggunaController::class,'cekStatus'])
    ->name('pengguna.cek_status');


});







/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
->prefix('admin')
->group(function(){



    Route::get('/',
    [AdminController::class,'index'])
    ->name('admin.dashboard');



    Route::get('/laporan-masuk',
    [AdminLaporanController::class,'index'])
    ->name('admin.laporan.index');



    Route::get('/laporan/{id}',
    [AdminLaporanController::class,'detail'])
    ->name('admin.laporan.show');



    Route::get('/cetak-laporan',
    [RekapController::class,'index'])
    ->name('admin.cetak');



    Route::get('/laporan/{id}/verifikasi',
    [AdminLaporanController::class,'verifikasiForm'])
    ->name('admin.laporan.verifikasi.form');



    Route::post('/laporan/{id}/verifikasi',
    [AdminLaporanController::class,'verifikasi'])
    ->name('admin.laporan.verifikasi');





    /*
    HASIL INVESTIGASI
    */


    Route::get('/investigasi',
    [AdminInvestigasiController::class,'index'])
    ->name('admin.investigasi.index');



    Route::get('/investigasi/{id}/cetak',
    [AdminInvestigasiController::class,'cetak'])
    ->name('admin.investigasi.cetak');



    Route::get('/investigasi/{id}',
    [AdminInvestigasiController::class,'show'])
    ->name('admin.investigasi.show');



    Route::post('/investigasi/{id}/setujui',
    [AdminInvestigasiController::class,'setujui'])
    ->name('admin.investigasi.setujui');



    Route::post('/investigasi/{id}/kembalikan',
    [AdminInvestigasiController::class,'kembalikan'])
    ->name('admin.investigasi.kembalikan');




    Route::post('/status/{id}',
[AdminController::class,'updateStatus'])
->name('admin.status');


/*
|--------------------------------------------------------------------------
| REKAP LAPORAN & HASIL INVESTIGASI
|--------------------------------------------------------------------------
*/

Route::get('/rekap',
[RekapController::class,'index'])
->name('admin.rekap');

});









/*
|--------------------------------------------------------------------------
| SATGAS
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
->prefix('satgas')
->group(function(){



    /*
    Dashboard Satgas
    */

    Route::get('/',
    [SatgasController::class,'index'])
    ->name('satgas.dashboard');





    /*
    Laporan Masuk Satgas
    */

    Route::get('/laporan-masuk',
    [SatgasController::class,'laporanMasuk'])
    ->name('satgas.laporan');





    /*
    Riwayat Investigasi
    */

    Route::get('/riwayat',
    [SatgasController::class,'riwayat'])
    ->name('satgas.riwayat');





    /*
    Cetak Detail Laporan
    */

    Route::get('/cetak/{id}',
    [SatgasController::class,'cetak'])
    ->name('satgas.cetak');





    /*
    Selesaikan Laporan
    */

    Route::put('/selesai/{id}',
    [SatgasController::class,'selesai'])
    ->name('satgas.selesai');





    /*
    Detail Laporan
    */

    Route::get('/laporan/{id}',
    [SatgasController::class,'show'])
    ->name('satgas.show');





    /*
    Kirim Hasil Investigasi
    */

    Route::post('/laporan/{id}/investigasi',
    [SatgasController::class,'kirimInvestigasi'])
    ->name('satgas.kirimInvestigasi');



});