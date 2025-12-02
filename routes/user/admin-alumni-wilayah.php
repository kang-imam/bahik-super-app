<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniWilayah\DashboardAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\DataWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\ValidasiWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\StrukturWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\ProgramWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\AgendaWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\KegiatanWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\LaporanWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\BeritaWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\ArsipWilayahAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniWilayah\DokumenWilayahAdminAlumniWilayahController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Wilayah'])
  ->prefix('admin-alumni-wilayah')->name('admin-alumni-wilayah.')->group(function () {
    Route::get('dashboard', [DashboardAdminAlumniWilayahController::class, 'index'])->name('dashboard-wilayah');
    Route::get('data-wilayah', [DataWilayahAdminAlumniWilayahController::class, 'index'])->name('data-wilayah');
    Route::get('validasi-wilayah', [ValidasiWilayahAdminAlumniWilayahController::class, 'index'])->name('validasi-wilayah');
    Route::get('struktur-wilayah', [StrukturWilayahAdminAlumniWilayahController::class, 'index'])->name('struktur-wilayah');
    Route::get('program-wilayah', [ProgramWilayahAdminAlumniWilayahController::class, 'index'])->name('program-wilayah');
    Route::get('agenda-wilayah', [AgendaWilayahAdminAlumniWilayahController::class, 'index'])->name('agenda-wilayah');
    Route::get('kegiatan-wilayah', [KegiatanWilayahAdminAlumniWilayahController::class, 'index'])->name('kegiatan-wilayah');
    Route::get('laporan-wilayah', [LaporanWilayahAdminAlumniWilayahController::class, 'index'])->name('laporan-wilayah');
    Route::get('berita-wilayah', [BeritaWilayahAdminAlumniWilayahController::class, 'index'])->name('berita-wilayah');
    Route::get('arsip-wilayah', [ArsipWilayahAdminAlumniWilayahController::class, 'index'])->name('arsip-wilayah');
    Route::get('dokumen-wilayah', [DokumenWilayahAdminAlumniWilayahController::class, 'index'])->name('dokumen-wilayah');
  });
