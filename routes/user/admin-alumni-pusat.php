<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniPusat\DashboardAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\DataAlumniAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\RegistrasiAlumniAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\ValidasiAlumniAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\StrukturPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\ProgramPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\AgendaPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\KegiatanPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\LaporanPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\BeritaAlumniAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\ArsipAlumniAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\NotifikasiPusatAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniPusat\DokumenPusatAdminAlumniPusatController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Pusat'])
  ->prefix('admin-alumni-pusat')->name('admin-alumni-pusat.')->group(function () {
    Route::get('dashboard', [DashboardAdminAlumniPusatController::class, 'index'])->name('dashboard-pusat');
    Route::get('data-alumni', [DataAlumniAdminAlumniPusatController::class, 'index'])->name('data-alumni');
    Route::get('registrasi-alumni', [RegistrasiAlumniAdminAlumniPusatController::class, 'index'])->name('registrasi-alumni');
    Route::get('validasi-alumni', [ValidasiAlumniAdminAlumniPusatController::class, 'index'])->name('validasi-alumni');
    Route::get('struktur-pusat', [StrukturPusatAdminAlumniPusatController::class, 'index'])->name('struktur-pusat');
    Route::get('program-pusat', [ProgramPusatAdminAlumniPusatController::class, 'index'])->name('program-pusat');
    Route::get('agenda-pusat', [AgendaPusatAdminAlumniPusatController::class, 'index'])->name('agenda-pusat');
    Route::get('kegiatan-pusat', [KegiatanPusatAdminAlumniPusatController::class, 'index'])->name('kegiatan-pusat');
    Route::get('laporan-pusat', [LaporanPusatAdminAlumniPusatController::class, 'index'])->name('laporan-pusat');
    Route::get('berita-alumni', [BeritaAlumniAdminAlumniPusatController::class, 'index'])->name('berita-alumni');
    Route::get('arsip-alumni', [ArsipAlumniAdminAlumniPusatController::class, 'index'])->name('arsip-alumni');
    Route::get('notifikasi-pusat', [NotifikasiPusatAdminAlumniPusatController::class, 'index'])->name('notifikasi-pusat');
    Route::get('dokumen-pusat', [DokumenPusatAdminAlumniPusatController::class, 'index'])->name('dokumen-pusat');
  });
