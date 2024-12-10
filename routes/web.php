<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/anggota', [AnggotaController::class, 'index']); 
Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('anggota.store'); 
Route::get('/anggota/{id_anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit'); 
Route::put('/anggota/{id_anggota}', [AnggotaController::class, 'update'])->name('anggota.update'); 
Route::delete('/anggota/{id_anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy'); 
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store'); 
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);

