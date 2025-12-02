<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserBaru\DashboardUserBaruController;
use App\Http\Controllers\User\UserBaru\ProfilPesantrenUserBaruController;
use App\Http\Controllers\User\UserBaru\StrukturOrganisasiUserBaruController;
use App\Http\Controllers\User\UserBaru\ProgramPesantrenUserBaruController;
use App\Http\Controllers\User\UserBaru\JadwalKegiatanUserBaruController;
use App\Http\Controllers\User\UserBaru\BeritaPesantrenUserBaruController;
use App\Http\Controllers\User\UserBaru\KontakPesantrenUserBaruController;
use App\Http\Controllers\User\UserBaru\PendaftaranSantriUserBaruController;
use App\Http\Controllers\User\UserBaru\InformasiAsramaUserBaruController;
use App\Http\Controllers\User\UserBaru\InformasiKamarUserBaruController;
use App\Http\Controllers\User\UserBaru\InformasiKeamananUserBaruController;
use App\Http\Controllers\User\UserBaru\InformasiKesehatanUserBaruController;
use App\Http\Controllers\User\UserBaru\InformasiPendidikanUserBaruController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:User Baru'])
  ->prefix('user-baru')->name('user-baru.')->group(function () {
    Route::get('dashboard', [DashboardUserBaruController::class, 'index'])->name('dashboard-user-baru');
    Route::get('profil-pesantren', [ProfilPesantrenUserBaruController::class, 'index'])->name('profil-pesantren');
    Route::get('struktur-organisasi', [StrukturOrganisasiUserBaruController::class, 'index'])->name('struktur-organisasi');
    Route::get('program-pesantren', [ProgramPesantrenUserBaruController::class, 'index'])->name('program-pesantren');
    Route::get('jadwal-kegiatan', [JadwalKegiatanUserBaruController::class, 'index'])->name('jadwal-kegiatan');
    Route::get('berita-pesantren', [BeritaPesantrenUserBaruController::class, 'index'])->name('berita-pesantren');
    Route::get('kontak-pesantren', [KontakPesantrenUserBaruController::class, 'index'])->name('kontak-pesantren');
    Route::get('pendaftaran-santri', [PendaftaranSantriUserBaruController::class, 'index'])->name('pendaftaran-santri');
    Route::get('informasi-asrama', [InformasiAsramaUserBaruController::class, 'index'])->name('informasi-asrama');
    Route::get('informasi-kamar', [InformasiKamarUserBaruController::class, 'index'])->name('informasi-kamar');
    Route::get('informasi-keamanan', [InformasiKeamananUserBaruController::class, 'index'])->name('informasi-keamanan');
    Route::get('informasi-kesehatan', [InformasiKesehatanUserBaruController::class, 'index'])->name('informasi-kesehatan');
    Route::get('informasi-pendidikan', [InformasiPendidikanUserBaruController::class, 'index'])->name('informasi-pendidikan');
  });
