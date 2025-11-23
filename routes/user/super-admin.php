<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\SuperAdmin\DashboardSuperAdminController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Super Admin'])->group(function () {
  Route::get('/super-admin-dashboard', [DashboardSuperAdminController::class, 'index'])->name('super-admin-dashboard');
});
