<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniPusat\DashboardAdminAlumniPusatController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Pusat'])->group(function () {
  Route::get('/admin-alumni-pusat-dashboard', [DashboardAdminAlumniPusatController::class, 'index'])->name('admin-alumni-pusat-dashboard');
});
