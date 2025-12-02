<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKesehatan\DashboardAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\DataKesehatanAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\RekamMedisAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\ObatPesantrenAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\StokObatAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\LayananKesehatanAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\PemeriksaanSantriAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\LaporanKesehatanAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\RujukanMedisAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\CatatanKlinikAdminKesehatanController;
use App\Http\Controllers\User\AdminKesehatan\JadwalKlinikAdminKesehatanController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Cabang'])
  ->prefix('admin-kesehatan')->name('admin-kesehatan.')->group(function () {
    Route::get('dashboard', [DashboardAdminKesehatanController::class, 'index'])->name('dashboard-kesehatan');
    Route::get('data-kesehatan', [DataKesehatanAdminKesehatanController::class, 'index'])->name('data-kesehatan');
    Route::get('rekam-medis', [RekamMedisAdminKesehatanController::class, 'index'])->name('rekam-medis');
    Route::get('obat-pesantren', [ObatPesantrenAdminKesehatanController::class, 'index'])->name('obat-pesantren');
    Route::get('stok-obat', [StokObatAdminKesehatanController::class, 'index'])->name('stok-obat');
    Route::get('layanan-kesehatan', [LayananKesehatanAdminKesehatanController::class, 'index'])->name('layanan-kesehatan');
    Route::get('pemeriksaan-santri', [PemeriksaanSantriAdminKesehatanController::class, 'index'])->name('pemeriksaan-santri');
    Route::get('laporan-kesehatan', [LaporanKesehatanAdminKesehatanController::class, 'index'])->name('laporan-kesehatan');
    Route::get('rujukan-medis', [RujukanMedisAdminKesehatanController::class, 'index'])->name('rujukan-medis');
    Route::get('catatan-klinik', [CatatanKlinikAdminKesehatanController::class, 'index'])->name('catatan-klinik');
    Route::get('jadwal-klinik', [JadwalKlinikAdminKesehatanController::class, 'index'])->name('jadwal-klinik');
  });
