<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniRegional\DashboardAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\DataRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\ValidasiRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\StrukturRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\ProgramRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\AgendaRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\KegiatanRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\LaporanRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\BeritaRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\ArsipRegionalAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniRegional\DokumenRegionalAdminAlumniRegionalController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Regional'])
  ->prefix('admin-alumni-regional')->name('admin-alumni-regional.')->group(function () {
    Route::get('dashboard', [DashboardAdminAlumniRegionalController::class, 'index'])->name('dashboard-regional');
    Route::get('data-regional', [DataRegionalAdminAlumniRegionalController::class, 'index'])->name('data-regional');
    Route::get('validasi-regional', [ValidasiRegionalAdminAlumniRegionalController::class, 'index'])->name('validasi-regional');
    Route::get('struktur-regional', [StrukturRegionalAdminAlumniRegionalController::class, 'index'])->name('struktur-regional');
    Route::get('program-regional', [ProgramRegionalAdminAlumniRegionalController::class, 'index'])->name('program-regional');
    Route::get('agenda-regional', [AgendaRegionalAdminAlumniRegionalController::class, 'index'])->name('agenda-regional');
    Route::get('kegiatan-regional', [KegiatanRegionalAdminAlumniRegionalController::class, 'index'])->name('kegiatan-regional');
    Route::get('laporan-regional', [LaporanRegionalAdminAlumniRegionalController::class, 'index'])->name('laporan-regional');
    Route::get('berita-regional', [BeritaRegionalAdminAlumniRegionalController::class, 'index'])->name('berita-regional');
    Route::get('arsip-regional', [ArsipRegionalAdminAlumniRegionalController::class, 'index'])->name('arsip-regional');
    Route::get('dokumen-regional', [DokumenRegionalAdminAlumniRegionalController::class, 'index'])->name('dokumen-regional');
  });
