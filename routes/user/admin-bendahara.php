<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminBendahara\DashboardAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\KasPesantrenAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\KasAsramaAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\PembayaranSantriAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\TagihanSantriAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\RiwayatPembayaranAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\LaporanKeuanganAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\AnggaranTahunanAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\CatatanTransaksiAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\DonasiPesantrenAdminBendaharaController;
use App\Http\Controllers\User\AdminBendahara\RekapKeuanganAdminBendaharaController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Bendahara'])
  ->prefix('admin-bendahara')->name('admin-bendahara.')->group(function () {
    Route::get('dashboard', [DashboardAdminBendaharaController::class, 'index'])->name('dashboard-bendahara');
    Route::get('kas-pesantren', [KasPesantrenAdminBendaharaController::class, 'index'])->name('kas-pesantren');
    Route::get('kas-asrama', [KasAsramaAdminBendaharaController::class, 'index'])->name('kas-asrama');
    Route::get('pembayaran-santri', [PembayaranSantriAdminBendaharaController::class, 'index'])->name('pembayaran-santri');
    Route::get('tagihan-santri', [TagihanSantriAdminBendaharaController::class, 'index'])->name('tagihan-santri');
    Route::get('riwayat-pembayaran', [RiwayatPembayaranAdminBendaharaController::class, 'index'])->name('riwayat-pembayaran');
    Route::get('laporan-keuangan', [LaporanKeuanganAdminBendaharaController::class, 'index'])->name('laporan-keuangan');
    Route::get('anggaran-tahunan', [AnggaranTahunanAdminBendaharaController::class, 'index'])->name('anggaran-tahunan');
    Route::get('catatan-transaksi', [CatatanTransaksiAdminBendaharaController::class, 'index'])->name('catatan-transaksi');
    Route::get('donasi-pesantren', [DonasiPesantrenAdminBendaharaController::class, 'index'])->name('donasi-pesantren');
    Route::get('rekap-keuangan', [RekapKeuanganAdminBendaharaController::class, 'index'])->name('rekap-keuangan');
  });
