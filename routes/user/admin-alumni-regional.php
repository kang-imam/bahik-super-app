<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniRegional\DashboardAdminAlumniRegionalController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Regional'])->group(function () {
  Route::get('/admin-alumni-regional-dashboard', [DashboardAdminAlumniRegionalController::class, 'index'])->name('admin-alumni-regional-dashboard');
});
