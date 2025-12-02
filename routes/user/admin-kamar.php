<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKamar\DashboardAdminKamarController;
use App\Http\Controllers\User\AdminKamar\DataKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\AturKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\PenempatanSantriAdminKamarController;
use App\Http\Controllers\User\AdminKamar\PerpindahanKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\InventarisKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\KebersihanKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\LaporanKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\JadwalKamarAdminKamarController;
use App\Http\Controllers\User\AdminKamar\StatusHunianAdminKamarController;
use App\Http\Controllers\User\AdminKamar\PengurusKamarAdminKamarController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Kamar'])
  ->prefix('admin-kamar')->name('admin-kamar.')->group(function () {
    Route::get('dashboard', [DashboardAdminKamarController::class, 'index'])->name('dashboard-kamar');
    Route::get('data-kamar', [DataKamarAdminKamarController::class, 'index'])->name('data-kamar');
    Route::get('atur-kamar', [AturKamarAdminKamarController::class, 'index'])->name('atur-kamar');
    Route::get('penempatan-santri', [PenempatanSantriAdminKamarController::class, 'index'])->name('penempatan-santri');
    Route::get('perpindahan-kamar', [PerpindahanKamarAdminKamarController::class, 'index'])->name('perpindahan-kamar');
    Route::get('inventaris-kamar', [InventarisKamarAdminKamarController::class, 'index'])->name('inventaris-kamar');
    Route::get('kebersihan-kamar', [KebersihanKamarAdminKamarController::class, 'index'])->name('kebersihan-kamar');
    Route::get('laporan-kamar', [LaporanKamarAdminKamarController::class, 'index'])->name('laporan-kamar');
    Route::get('jadwal-kamar', [JadwalKamarAdminKamarController::class, 'index'])->name('jadwal-kamar');
    Route::get('status-hunian', [StatusHunianAdminKamarController::class, 'index'])->name('status-hunian');
    Route::get('pengurus-kamar', [PengurusKamarAdminKamarController::class, 'index'])->name('pengurus-kamar');
  });
