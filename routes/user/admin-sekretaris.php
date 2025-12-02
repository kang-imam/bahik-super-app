<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminSekretaris\DashboardAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\SuratMasukAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\SuratKeluarAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\ArsipSuratAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\AgendaSuratAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\DisposisiSuratAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\NotulenRapatAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\AgendaRapatAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\LaporanSekretarisAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\DokumenPesantrenAdminSekretarisController;
use App\Http\Controllers\User\AdminSekretaris\InventarisArsipAdminSekretarisController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Sekretaris'])
  ->prefix('admin-sekretaris')->name('admin-sekretaris.')->group(function () {
    Route::get('dashboard', [DashboardAdminSekretarisController::class, 'index'])->name('dashboard-sekretaris');
    Route::get('surat-masuk', [SuratMasukAdminSekretarisController::class, 'index'])->name('surat-masuk');
    Route::get('surat-keluar', [SuratKeluarAdminSekretarisController::class, 'index'])->name('surat-keluar');
    Route::get('arsip-surat', [ArsipSuratAdminSekretarisController::class, 'index'])->name('arsip-surat');
    Route::get('agenda-surat', [AgendaSuratAdminSekretarisController::class, 'index'])->name('agenda-surat');
    Route::get('disposisi-surat', [DisposisiSuratAdminSekretarisController::class, 'index'])->name('disposisi-surat');
    Route::get('notulen-rapat', [NotulenRapatAdminSekretarisController::class, 'index'])->name('notulen-rapat');
    Route::get('agenda-rapat', [AgendaRapatAdminSekretarisController::class, 'index'])->name('agenda-rapat');
    Route::get('laporan-sekretaris', [LaporanSekretarisAdminSekretarisController::class, 'index'])->name('laporan-sekretaris');
    Route::get('dokumen-pesantren', [DokumenPesantrenAdminSekretarisController::class, 'index'])->name('dokumen-pesantren');
    Route::get('inventaris-arsip', [InventarisArsipAdminSekretarisController::class, 'index'])->name('inventaris-arsip');
  });
