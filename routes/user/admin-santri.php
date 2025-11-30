<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminSantri\DashboardAdminSantriController;
use App\Http\Controllers\User\AdminSantri\DataSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\RegistrasiSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\MutasiSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\ArsipSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\KartuSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\RiwayatSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\StatusSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\KelolaWaliAdminSantriController;
use App\Http\Controllers\User\AdminSantri\LaporanSantriAdminSantriController;
use App\Http\Controllers\User\AdminSantri\VerifikasiDokumenAdminSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Santri'])
  ->prefix('admin-santri')->name('admin-santri.')->group(function () {
    Route::get('dashboard', [DashboardAdminSantriController::class, 'index'])->name('dashboard');
    Route::get('data-santri', [DataSantriAdminSantriController::class, 'index'])->name('data-santri');
    Route::get('registrasi-santri', [RegistrasiSantriAdminSantriController::class, 'index'])->name('registrasi-santri');
    Route::get('mutasi-santri', [MutasiSantriAdminSantriController::class, 'index'])->name('mutasi-santri');
    Route::get('arsip-santri', [ArsipSantriAdminSantriController::class, 'index'])->name('arsip-santri');
    Route::get('kartu-santri', [KartuSantriAdminSantriController::class, 'index'])->name('kartu-santri');
    Route::get('riwayat-santri', [RiwayatSantriAdminSantriController::class, 'index'])->name('riwayat-santri');
    Route::get('status-santri', [StatusSantriAdminSantriController::class, 'index'])->name('status-santri');
    Route::get('kelola-wali', [KelolaWaliAdminSantriController::class, 'index'])->name('kelola-wali');
    Route::get('laporan-santri', [LaporanSantriAdminSantriController::class, 'index'])->name('laporan-santri');
    Route::get('verifikasi-dokumen', [VerifikasiDokumenAdminSantriController::class, 'index'])->name('verifikasi-dokumen');
  });
