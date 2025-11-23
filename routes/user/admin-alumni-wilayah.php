<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniWilayah\DashboardAdminAlumniWilayahController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Wilayah'])->group(function () {
  Route::get('/admin-alumni-wilayah-dashboard', [DashboardAdminAlumniWilayahController::class, 'index'])->name('admin-alumni-wilayah-dashboard');
});
