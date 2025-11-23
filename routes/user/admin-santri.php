<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminSantri\DashboardAdminSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Santri'])->group(function () {
  Route::get('/admin-santri-dashboard', [DashboardAdminSantriController::class, 'index'])->name('admin-santri-dashboard');
});
