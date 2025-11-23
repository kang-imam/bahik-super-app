<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniCabang\DashboardAdminAlumniCabangController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Cabang'])->group(function () {
  Route::get('/admin-alumni-cabang-dashboard', [DashboardAdminAlumniCabangController::class, 'index'])->name('admin-alumni-cabang-dashboard');
});
