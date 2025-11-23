<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAsrama\DashboardAdminAsramaController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Asrama'])->group(function () {
  Route::get('/admin-asrama-dashboard', [DashboardAdminAsramaController::class, 'index'])->name('admin-asrama-dashboard');
});
