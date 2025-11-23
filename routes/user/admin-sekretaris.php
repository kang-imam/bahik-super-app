<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminSekretaris\DashboardAdminSekretarisController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Sekretaris'])->group(function () {
  Route::get('/admin-sekretaris-dashboard', [DashboardAdminSekretarisController::class, 'index'])->name('admin-sekretaris-dashboard');
});
