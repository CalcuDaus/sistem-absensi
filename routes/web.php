<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstrukturController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Models\Instruktur;
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

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/instruktur', [InstrukturController::class, 'index']);
    Route::get('/periode', [PeriodeController::class, 'index']);
    Route::get('/jurusan', [JurusanController::class, 'index']);
    Route::get('/pengaturan', [PengaturanController::class, 'index']);
    Route::prefix('/sekolah')->group(function () {
        Route::get('/', [SekolahController::class, 'index'])->name('sekolah');
        Route::get('/tambah', [SekolahController::class, 'create']);
        Route::get('/edit/{id}', [SekolahController::class, 'edit'])->name('url.edit.sekolah');
        Route::post('/tambah', [SekolahController::class, 'store'])->name('tambah.sekolah');
        Route::put('/edit/{id}', [SekolahController::class, 'update'])->name('edit.sekolah');
    });
    Route::prefix('/siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index']);
        Route::get('/tambah', [SiswaController::class, 'create']);
    });
});
