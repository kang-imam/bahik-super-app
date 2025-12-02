<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DewanKiai\DashboardDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapSantriDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapKehadiranDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapPelanggaranDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapPrestasiDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapKesehatanDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapKeamananDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\RekapAkademikDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\AgendaKiaiDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\PesanKiaiDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\EvaluasiSantriDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\KeputusanKiaiDewanKiaiController;
use App\Http\Controllers\User\DewanKiai\LaporanPesantrenDewanKiaiController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Dewan kiai'])
  ->prefix('dewan-kiai')->name('dewan-kiai.')->group(function () {
    Route::get('dashboard', [DashboardDewanKiaiController::class, 'index'])->name('dashboard-dewan-kiai');
    Route::get('rekap-santri', [RekapSantriDewanKiaiController::class, 'index'])->name('rekap-santri');
    Route::get('rekap-kehadiran', [RekapKehadiranDewanKiaiController::class, 'index'])->name('rekap-kehadiran');
    Route::get('rekap-pelanggaran', [RekapPelanggaranDewanKiaiController::class, 'index'])->name('rekap-pelanggaran');
    Route::get('rekap-prestasi', [RekapPrestasiDewanKiaiController::class, 'index'])->name('rekap-prestasi');
    Route::get('rekap-kesehatan', [RekapKesehatanDewanKiaiController::class, 'index'])->name('rekap-kesehatan');
    Route::get('rekap-keamanan', [RekapKeamananDewanKiaiController::class, 'index'])->name('rekap-keamanan');
    Route::get('rekap-akademik', [RekapAkademikDewanKiaiController::class, 'index'])->name('rekap-akademik');
    Route::get('agenda-kiai', [AgendaKiaiDewanKiaiController::class, 'index'])->name('agenda-kiai');
    Route::get('pesan-kiai', [PesanKiaiDewanKiaiController::class, 'index'])->name('pesan-kiai');
    Route::get('evaluasi-santri', [EvaluasiSantriDewanKiaiController::class, 'index'])->name('evaluasi-santri');
    Route::get('keputusan-kiai', [KeputusanKiaiDewanKiaiController::class, 'index'])->name('keputusan-kiai');
    Route::get('laporan-pesantren', [LaporanPesantrenDewanKiaiController::class, 'index'])->name('laporan-pesantren');
  });
