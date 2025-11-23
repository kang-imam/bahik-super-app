<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminPendidikan\DashboardAdminPendidikanController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Pendidikan'])->group(function () {
  Route::get('/admin-pendidikan-dashboard', [DashboardAdminPendidikanController::class, 'index'])->name('admin-pendidikan-dashboard');
});
