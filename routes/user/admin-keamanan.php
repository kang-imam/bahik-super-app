<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKeamanan\DashboardAdminKeamananController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Keamanan'])->group(function () {
  Route::get('/admin-keamanan-dashboard', [DashboardAdminKeamananController::class, 'index'])->name('admin-keamanan-dashboard');
});
