<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('menu.index');
Route::post('/tambah', [CrudController::class, 'store'])->name('menu.tambah');
Route::put('/ubah/{menu}', [CrudController::class, 'update'])->name('menu.ubah');
Route::delete('/hapus/{menu}', [CrudController::class, 'destroy'])->name('menu.hapus');

Route::post('/save_pesanan', [PesananController::class, 'store'])->name('pesanan.tambah');

Route::post('/convert_pdf', [PdfController::class, 'download'])->name('convert.pdf');