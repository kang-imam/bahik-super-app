<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAsrama\DashboardAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\DataAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\AturAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\JadwalAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\KegiatanAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\InventarisAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\PengurusAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\LaporanAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\PenghuniAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\KebijakanAsramaAdminAsramaController;
use App\Http\Controllers\User\AdminAsrama\StatusAsramaAdminAsramaController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Asrama'])
  ->prefix('admin-asrama')->name('admin-asrama.')->group(function () {
    Route::get('dashboard', [DashboardAdminAsramaController::class, 'index'])->name('dashboard-asrama');
    Route::get('data-asrama', [DataAsramaAdminAsramaController::class, 'index'])->name('data-asrama');
    Route::get('atur-asrama', [AturAsramaAdminAsramaController::class, 'index'])->name('atur-asrama');
    Route::get('jadwal-asrama', [JadwalAsramaAdminAsramaController::class, 'index'])->name('jadwal-asrama');
    Route::get('kegiatan-asrama', [KegiatanAsramaAdminAsramaController::class, 'index'])->name('kegiatan-asrama');
    Route::get('inventaris-asrama', [InventarisAsramaAdminAsramaController::class, 'index'])->name('inventaris-asrama');
    Route::get('pengurus-asrama', [PengurusAsramaAdminAsramaController::class, 'index'])->name('pengurus-asrama');
    Route::get('laporan-asrama', [LaporanAsramaAdminAsramaController::class, 'index'])->name('laporan-asrama');
    Route::get('penghuni-asrama', [PenghuniAsramaAdminAsramaController::class, 'index'])->name('penghuni-asrama');
    Route::get('kebijakan-asrama', [KebijakanAsramaAdminAsramaController::class, 'index'])->name('kebijakan-asrama');
    Route::get('status-asrama', [StatusAsramaAdminAsramaController::class, 'index'])->name('status-asrama');
  });
