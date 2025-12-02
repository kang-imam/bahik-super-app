<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Santri\DashboardSantriController;
use App\Http\Controllers\User\Santri\ProfilSantriSantriController;
use App\Http\Controllers\User\Santri\JadwalSantriSantriController;
use App\Http\Controllers\User\Santri\RekapNilaiSantriController;
use App\Http\Controllers\User\Santri\AbsensiSantriSantriController;
use App\Http\Controllers\User\Santri\PelanggaranSantriSantriController;
use App\Http\Controllers\User\Santri\PrestasiSantriSantriController;
use App\Http\Controllers\User\Santri\KesehatanSantriSantriController;
use App\Http\Controllers\User\Santri\KeamananSantriSantriController;
use App\Http\Controllers\User\Santri\KeuanganSantriSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Santri'])
  ->prefix('santri')->name('santri.')->group(function () {
    Route::get('dashboard', [DashboardSantriController::class, 'index'])->name('dashboard-santri');
    Route::get('profil-santri', [ProfilSantriSantriController::class, 'index'])->name('profil-santri');
    Route::get('jadwal-santri', [JadwalSantriSantriController::class, 'index'])->name('jadwal-santri');
    Route::get('rekap-nilai-santri', [RekapNilaiSantriController::class, 'index'])->name('rekap-nilai-santri');
    Route::get('absensi-santri', [AbsensiSantriSantriController::class, 'index'])->name('absensi-santri');
    Route::get('pelanggaran-santri', [PelanggaranSantriSantriController::class, 'index'])->name('pelanggaran-santri');
    Route::get('prestasi-santri', [PrestasiSantriSantriController::class, 'index'])->name('prestasi-santri');
    Route::get('kesehatan-santri', [KesehatanSantriSantriController::class, 'index'])->name('kesehatan-santri');
    Route::get('keamanan-santri', [KeamananSantriSantriController::class, 'index'])->name('keamanan-santri');
    Route::get('keuangan-santri', [KeuanganSantriSantriController::class, 'index'])->name('keuangan-santri');
  });
