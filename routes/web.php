<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiteController;
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
    return redirect()->route('home');
});

Route::post('/getData', [DataController::class, 'getSelectSiswa']);
Route::get('/login', [SiteController::class, 'index'])->name('home');
Route::get('/logout', [SiteController::class, 'logout'])->name('logout');
Route::post('/login', [SiteController::class, 'login'])->name('login');
Route::get('/lab/{nomor}', [SiteController::class, 'lab'])->name('lab');
Route::get('/berhasil', [SiteController::class, 'success'])->name('berhasil.absen');
Route::get('/error/lokasi', [SiteController::class, 'lokasi'])->name('error.lokasi');
Route::post('/tambah/absen', [AbsenController::class, 'store'])->name('tambah.absen');

Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/pengaturan', [PengaturanController::class, 'index']);
        Route::get('/absen', [AbsenController::class, 'index'])->name('absen');
        Route::prefix('/sekolah')->group(function () {
            Route::get('/', [SekolahController::class, 'index'])->name('sekolah');
            Route::get('/tambah', [SekolahController::class, 'create']);
            Route::get('/edit/{id}', [SekolahController::class, 'edit'])->name('url.edit.sekolah');
            Route::post('/tambah', [SekolahController::class, 'store'])->name('tambah.sekolah');
            Route::put('/edit/{id}', [SekolahController::class, 'update'])->name('edit.sekolah');
            Route::delete('/hapus/{id}', [SekolahController::class, 'destroy'])->name('hapus.sekolah');
        });
        Route::prefix('/periode')->group(function () {
            Route::get('/', [PeriodeController::class, 'index'])->name('periode');
            Route::get('/tambah', [PeriodeController::class, 'create']);
            Route::get('/edit/{id}', [PeriodeController::class, 'edit'])->name('url.edit.periode');
            Route::post('/tambah', [PeriodeController::class, 'store'])->name('tambah.periode');
            Route::put('/edit/{id}', [PeriodeController::class, 'update'])->name('edit.periode');
            Route::delete('/hapus/{id}', [PeriodeController::class, 'destroy'])->name('hapus.periode');
        });
        Route::prefix('/jurusan')->group(function () {
            Route::get('/', [JurusanController::class, 'index'])->name('jurusan');
            Route::get('/tambah', [JurusanController::class, 'create']);
            Route::get('/edit/{id}', [JurusanController::class, 'edit'])->name('url.edit.jurusan');
            Route::post('/tambah', [JurusanController::class, 'store'])->name('tambah.jurusan');
            Route::put('/edit/{id}', [JurusanController::class, 'update'])->name('edit.jurusan');
            Route::delete('/hapus/{id}', [JurusanController::class, 'destroy'])->name('hapus.jurusan');
        });
        Route::prefix('/instruktur')->group(function () {
            Route::get('/', [InstrukturController::class, 'index'])->name('instruktur');
            Route::get('/tambah', [InstrukturController::class, 'create']);
            Route::get('/edit/{id}', [InstrukturController::class, 'edit'])->name('url.edit.instruktur');
            Route::post('/tambah', [InstrukturController::class, 'store'])->name('tambah.instruktur');
            Route::put('/edit/{id}', [InstrukturController::class, 'update'])->name('edit.instruktur');
            Route::delete('/hapus/{id}', [InstrukturController::class, 'destroy'])->name('hapus.instruktur');
        });
        Route::prefix('/siswa')->group(function () {
            Route::get('/', [SiswaController::class, 'index'])->name('siswa');
            Route::get('/tambah', [SiswaController::class, 'create']);
            Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('url.edit.siswa');
            Route::post('/tambah', [SiswaController::class, 'store'])->name('tambah.siswa');
            Route::put('/edit/{id}', [SiswaController::class, 'update'])->name('edit.siswa');
            Route::delete('/hapus/{id}', [SiswaController::class, 'destroy'])->name('hapus.siswa');
        });
    });
});
