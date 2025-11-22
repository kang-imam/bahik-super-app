<?php

use App\Http\Controllers\AksesMasukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\Publik\HomeController;

use App\Http\Controllers\User\UserBaru\DashboardUserBaruController;
use App\Http\Controllers\User\SuperAdmin\DashboardSuperAdminController;
use App\Http\Controllers\User\DewanKiai\DashboardDewanKiaiController;
use App\Http\Controllers\User\AdminSantri\DashboardAdminSantriController;
use App\Http\Controllers\User\AdminSekretaris\DashboardAdminSekretarisController;
use App\Http\Controllers\User\AdminBendahara\DashboardAdminBendaharaController;
use App\Http\Controllers\User\AdminKeamanan\DashboardAdminKeamananController;
use App\Http\Controllers\User\AdminPendidikan\DashboardAdminPendidikanController;
use App\Http\Controllers\User\AdminKesehatan\DashboardAdminKesehatanController;
use App\Http\Controllers\User\AdminAsrama\DashboardAdminAsramaController;
use App\Http\Controllers\User\AdminKamar\DashboardAdminKamarController;
use App\Http\Controllers\User\AdminAlumniPusat\DashboardAdminAlumniPusatController;
use App\Http\Controllers\User\AdminAlumniWilayah\DashboardAdminAlumniWilayahController;
use App\Http\Controllers\User\AdminAlumniCabang\DashboardAdminAlumniCabangController;
use App\Http\Controllers\User\AdminAlumniRegional\DashboardAdminAlumniRegionalController;
use App\Http\Controllers\User\AdminAlumniDaerah\DashboardAdminAlumniDaerahController;
use App\Http\Controllers\User\Santri\DashboardSantriController;
use App\Http\Controllers\User\WaliSantri\DashboardWaliSantriController;
use App\Http\Controllers\User\Alumni\DashboardAlumniController;

Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [AksesMasukController::class, 'redirect'])->name('dashboard');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:User Baru'])->group(function () {
  Route::get('/user-baru-dashboard', [DashboardUserBaruController::class, 'index'])->name('user-baru-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Super Admin'])->group(function () {
  Route::get('/super-admin-dashboard', [DashboardSuperAdminController::class, 'index'])->name('super-admin-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Dewan Kiai'])->group(function () {
  Route::get('/dewan-kiai-dashboard', [DashboardDewanKiaiController::class, 'index'])->name('dewan-kiai-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Santri'])->group(function () {
  Route::get('/admin-santri-dashboard', [DashboardAdminSantriController::class, 'index'])->name('admin-santri-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Sekretaris'])->group(function () {
  Route::get('/admin-sekretaris-dashboard', [DashboardAdminSekretarisController::class, 'index'])->name('admin-sekretaris-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Bendahara'])->group(function () {
  Route::get('/admin-bendahara-dashboard', [DashboardAdminBendaharaController::class, 'index'])->name('admin-bendahara-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Keamanan'])->group(function () {
  Route::get('/admin-keamanan-dashboard', [DashboardAdminKeamananController::class, 'index'])->name('admin-keamanan-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Pendidikan'])->group(function () {
  Route::get('/admin-pendidikan-dashboard', [DashboardAdminPendidikanController::class, 'index'])->name('admin-pendidikan-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Kesehatan'])->group(function () {
  Route::get('/admin-kesehatan-dashboard', [DashboardAdminKesehatanController::class, 'index'])->name('admin-kesehatan-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Asrama'])->group(function () {
  Route::get('/admin-asrama-dashboard', [DashboardAdminAsramaController::class, 'index'])->name('admin-asrama-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Kamar'])->group(function () {
  Route::get('/admin-kamar-dashboard', [DashboardAdminKamarController::class, 'index'])->name('admin-kamar-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Pusat'])->group(function () {
  Route::get('/admin-alumni-pusat-dashboard', [DashboardAdminAlumniPusatController::class, 'index'])->name('admin-alumni-pusat-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Wilayah'])->group(function () {
  Route::get('/admin-alumni-wilayah-dashboard', [DashboardAdminAlumniWilayahController::class, 'index'])->name('admin-alumni-wilayah-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Cabang'])->group(function () {
  Route::get('/admin-alumni-cabang-dashboard', [DashboardAdminAlumniCabangController::class, 'index'])->name('admin-alumni-cabang-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Regional'])->group(function () {
  Route::get('/admin-alumni-regional-dashboard', [DashboardAdminAlumniRegionalController::class, 'index'])->name('admin-alumni-regional-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Daerah'])->group(function () {
  Route::get('/admin-alumni-daerah-dashboard', [DashboardAdminAlumniDaerahController::class, 'index'])->name('admin-alumni-daerah-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Santri'])->group(function () {
  Route::get('/santri-dashboard', [DashboardSantriController::class, 'index'])->name('santri-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Wali Santri'])->group(function () {
  Route::get('/wali-santri-dashboard', [DashboardWaliSantriController::class, 'index'])->name('wali-santri-dashboard');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Alumni'])->group(function () {
  Route::get('/alumni-dashboard', [DashboardAlumniController::class, 'index'])->name('alumni-dashboard');
});
