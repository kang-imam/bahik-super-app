<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKeamanan\DashboardAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\DataKeamananAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\LaporanPelanggaranAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\JadwalPatroliAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\BukuTamuAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\IzinKeluarAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\IzinMasukAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\KameraKeamananAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\CatatanPengawasanAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\StatusKeamananAdminKeamananController;
use App\Http\Controllers\User\AdminKeamanan\LaporanKeamananAdminKeamananController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Keamanan'])
  ->prefix('admin-keamanan')->name('admin-keamanan.')->group(function () {
    Route::get('dashboard', [DashboardAdminKeamananController::class, 'index'])->name('dashboard-keamanan');
    Route::get('data-keamanan', [DataKeamananAdminKeamananController::class, 'index'])->name('data-keamanan');
    Route::get('laporan-pelanggaran', [LaporanPelanggaranAdminKeamananController::class, 'index'])->name('laporan-pelanggaran');
    Route::get('jadwal-patroli', [JadwalPatroliAdminKeamananController::class, 'index'])->name('jadwal-patroli');
    Route::get('buku-tamu', [BukuTamuAdminKeamananController::class, 'index'])->name('buku-tamu');
    Route::get('izin-keluar', [IzinKeluarAdminKeamananController::class, 'index'])->name('izin-keluar');
    Route::get('izin-masuk', [IzinMasukAdminKeamananController::class, 'index'])->name('izin-masuk');
    Route::get('kamera-keamanan', [KameraKeamananAdminKeamananController::class, 'index'])->name('kamera-keamanan');
    Route::get('catatan-pengawasan', [CatatanPengawasanAdminKeamananController::class, 'index'])->name('catatan-pengawasan');
    Route::get('status-keamanan', [StatusKeamananAdminKeamananController::class, 'index'])->name('status-keamanan');
    Route::get('laporan-keamanan', [LaporanKeamananAdminKeamananController::class, 'index'])->name('laporan-keamanan');
  });
