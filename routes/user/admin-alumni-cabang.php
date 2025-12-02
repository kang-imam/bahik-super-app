<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniCabang\DashboardAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\DataCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\ValidasiCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\StrukturCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\ProgramCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\AgendaCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\KegiatanCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\LaporanCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\BeritaCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\ArsipCabangAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniCabang\DokumenCabangAdminAlumniCabangController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Cabang'])
  ->prefix('admin-alumni-cabang')->name('admin-alumni-cabang.')->group(function () {
    Route::get('dashboard', [DashboardAdminAlumniCabangController::class, 'index'])->name('dashboard');
    Route::get('data-cabang', [DataCabangAdminAlumniCabangController::class, 'index'])->name('data-cabang');
    Route::get('validasi-cabang', [ValidasiCabangAdminAlumniCabangController::class, 'index'])->name('validasi-cabang');
    Route::get('struktur-cabang', [StrukturCabangAdminAlumniCabangController::class, 'index'])->name('struktur-cabang');
    Route::get('program-cabang', [ProgramCabangAdminAlumniCabangController::class, 'index'])->name('program-cabang');
    Route::get('agenda-cabang', [AgendaCabangAdminAlumniCabangController::class, 'index'])->name('agenda-cabang');
    Route::get('kegiatan-cabang', [KegiatanCabangAdminAlumniCabangController::class, 'index'])->name('kegiatan-cabang');
    Route::get('laporan-cabang', [LaporanCabangAdminAlumniCabangController::class, 'index'])->name('laporan-cabang');
    Route::get('berita-cabang', [BeritaCabangAdminAlumniCabangController::class, 'index'])->name('berita-cabang');
    Route::get('arsip-cabang', [ArsipCabangAdminAlumniCabangController::class, 'index'])->name('arsip-cabang');
    Route::get('dokumen-cabang', [DokumenCabangAdminAlumniCabangController::class, 'index'])->name('dokumen-cabang');
  });
