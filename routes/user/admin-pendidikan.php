<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminPendidikan\DashboardAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\DataPelajaranAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\JadwalPelajaranAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\JadwalUjianAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\NilaiSantriAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\LaporanAkademikAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\AbsensiKelasAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\RekapAbsensiAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\BahanAjarAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\LaporanPendidikanAdminPendidikanController;
use App\Http\Controllers\User\AdminPendidikan\EvaluasiAkademikAdminPendidikanController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Pendidikan'])
  ->prefix('admin-pendidikan')->name('admin-pendidikan.')->group(function () {
    Route::get('dashboard', [DashboardAdminPendidikanController::class, 'index'])->name('dashboard-pendidikan');
    Route::get('data-pelajaran', [DataPelajaranAdminPendidikanController::class, 'index'])->name('data-pelajaran');
    Route::get('jadwal-pelajaran', [JadwalPelajaranAdminPendidikanController::class, 'index'])->name('jadwal-pelajaran');
    Route::get('jadwal-ujian', [JadwalUjianAdminPendidikanController::class, 'index'])->name('jadwal-ujian');
    Route::get('nilai-santri', [NilaiSantriAdminPendidikanController::class, 'index'])->name('nilai-santri');
    Route::get('laporan-akademik', [LaporanAkademikAdminPendidikanController::class, 'index'])->name('laporan-akademik');
    Route::get('absensi-kelas', [AbsensiKelasAdminPendidikanController::class, 'index'])->name('absensi-kelas');
    Route::get('rekap-absensi', [RekapAbsensiAdminPendidikanController::class, 'index'])->name('rekap-absensi');
    Route::get('bahan-ajar', [BahanAjarAdminPendidikanController::class, 'index'])->name('bahan-ajar');
    Route::get('laporan-pendidikan', [LaporanPendidikanAdminPendidikanController::class, 'index'])->name('laporan-pendidikan');
    Route::get('evaluasi-akademik', [EvaluasiAkademikAdminPendidikanController::class, 'index'])->name('evaluasi-akademik');
  });
