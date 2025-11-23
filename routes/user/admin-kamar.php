<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKamar\DashboardAdminKamarController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Kamar'])->group(function () {
  Route::get('/admin-kamar-dashboard', [DashboardAdminKamarController::class, 'index'])->name('admin-kamar-dashboard');
});
