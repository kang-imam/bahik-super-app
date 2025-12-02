<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\WaliSantri\DashboardWaliSantriController;
use App\Http\Controllers\User\WaliSantri\ProfilAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\LaporanAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\NilaiAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\AbsensiAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\KeuanganAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\KesehatanAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\KeamananAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\RiwayatAnakWaliSantriController;
use App\Http\Controllers\User\WaliSantri\PesanWaliWaliSantriController;
use App\Http\Controllers\User\WaliSantri\InformasiPesantrenWaliSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Wali Santri'])
  ->prefix('wali-santri')->name('wali-santri.')->group(function () {
    Route::get('dashboard', [DashboardWaliSantriController::class, 'index'])->name('dashboard-wali-santri');
    Route::get('profil-anak', [ProfilAnakWaliSantriController::class, 'index'])->name('profil-anak');
    Route::get('laporan-anak', [LaporanAnakWaliSantriController::class, 'index'])->name('laporan-anak');
    Route::get('nilai-anak', [NilaiAnakWaliSantriController::class, 'index'])->name('nilai-anak');
    Route::get('absensi-anak', [AbsensiAnakWaliSantriController::class, 'index'])->name('absensi-anak');
    Route::get('keuangan-anak', [KeuanganAnakWaliSantriController::class, 'index'])->name('keuangan-anak');
    Route::get('kesehatan-anak', [KesehatanAnakWaliSantriController::class, 'index'])->name('kesehatan-anak');
    Route::get('keamanan-anak', [KeamananAnakWaliSantriController::class, 'index'])->name('keamanan-anak');
    Route::get('riwayat-anak', [RiwayatAnakWaliSantriController::class, 'index'])->name('riwayat-anak');
    Route::get('pesan-wali', [PesanWaliWaliSantriController::class, 'index'])->name('pesan-wali');
    Route::get('informasi-pesantren', [InformasiPesantrenWaliSantriController::class, 'index'])->name('informasi-pesantren');
  });
