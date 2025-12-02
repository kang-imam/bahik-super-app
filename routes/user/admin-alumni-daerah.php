<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniDaerah\DashboardAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\DataDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\ValidasiDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\StrukturDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\ProgramDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\AgendaDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\KegiatanDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\LaporanDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\BeritaDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\ArsipDaerahAdminAlumniDaerahController;
use App\Http\Controllers\User\AdminAlumniDaerah\DokumenDaerahAdminAlumniDaerahController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Daerah'])
  ->prefix('admin-alumni-daerah')->name('admin-alumni-daerah.')->group(function () {
    Route::get('dashboard', [DashboardAdminAlumniDaerahController::class, 'index'])->name('dashboard-daerah');
    Route::get('data-daerah', [DataDaerahAdminAlumniDaerahController::class, 'index'])->name('data-daerah');
    Route::get('validasi-daerah', [ValidasiDaerahAdminAlumniDaerahController::class, 'index'])->name('validasi-daerah');
    Route::get('struktur-daerah', [StrukturDaerahAdminAlumniDaerahController::class, 'index'])->name('struktur-daerah');
    Route::get('program-daerah', [ProgramDaerahAdminAlumniDaerahController::class, 'index'])->name('program-daerah');
    Route::get('agenda-daerah', [AgendaDaerahAdminAlumniDaerahController::class, 'index'])->name('agenda-daerah');
    Route::get('kegiatan-daerah', [KegiatanDaerahAdminAlumniDaerahController::class, 'index'])->name('kegiatan-daerah');
    Route::get('laporan-daerah', [LaporanDaerahAdminAlumniDaerahController::class, 'index'])->name('laporan-daerah');
    Route::get('berita-daerah', [BeritaDaerahAdminAlumniDaerahController::class, 'index'])->name('berita-daerah');
    Route::get('arsip-daerah', [ArsipDaerahAdminAlumniDaerahController::class, 'index'])->name('arsip-daerah');
    Route::get('dokumen-daerah', [DokumenDaerahAdminAlumniDaerahController::class, 'index'])->name('dokumen-daerah');
  });
