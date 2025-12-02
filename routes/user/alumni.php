<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Alumni\DashboardAlumniController;
use App\Http\Controllers\User\Alumni\JejaringAlumniAlumniController;
use App\Http\Controllers\User\Alumni\DonasiSosialAlumniController;
use App\Http\Controllers\User\Alumni\MentoringSantriAlumniController;
use App\Http\Controllers\User\Alumni\KegiatanAlumniAlumniController;
use App\Http\Controllers\User\Alumni\DakwahAlumniAlumniController;
use App\Http\Controllers\User\Alumni\UpdateDataAlumniController;
use App\Http\Controllers\User\Alumni\KomunikasiAlumniAlumniController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Alumni'])
  ->prefix('alumni')->name('alumni.')->group(function () {
    Route::get('dashboard', [DashboardAlumniController::class, 'index'])->name('dashboard-alumni');
    Route::get('jejaring-alumni', [JejaringAlumniAlumniController::class, 'index'])->name('jejaring-alumni');
    Route::get('donasi-sosial', [DonasiSosialAlumniController::class, 'index'])->name('donasi-sosial');
    Route::get('mentoring-santri', [MentoringSantriAlumniController::class, 'index'])->name('mentoring-santri');
    Route::get('kegiatan-alumni', [KegiatanAlumniAlumniController::class, 'index'])->name('kegiatan-alumni');
    Route::get('dakwah-alumni', [DakwahAlumniAlumniController::class, 'index'])->name('dakwah-alumni');
    Route::get('update-data-alumni', [UpdateDataAlumniController::class, 'index'])->name('update-data-alumni');
    Route::get('komunikasi-alumni', [KomunikasiAlumniAlumniController::class, 'index'])->name('komunikasi-alumni');
  });
