<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminKesehatan\DashboardAdminKesehatanController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Kesehatan'])->group(function () {
  Route::get('/admin-kesehatan-dashboard', [DashboardAdminKesehatanController::class, 'index'])->name('admin-kesehatan-dashboard');
});
