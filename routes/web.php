<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    //kategori
    Route::get('/kategori/tambah', [KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::delete('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
    Route::post('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/tambah', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
    Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
    Route::delete('/buku/hapus/{id}', [BukuController::class, 'hapus'])->name('buku.hapus');
    Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::patch('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
    //peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/peminjaman/tambah', [PeminjamanController::class, 'tambahPeminjaman'])->name('peminjaman.tambah');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');
    Route::post('/peminjaman/selesai/{id}', [PeminjamanController::class, 'kembalikanBuku'])->name('peminjaman.kembalikan');
    //generate report
    Route::get('/report', [PeminjamanController::class, 'print'])->name('print');

});

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();