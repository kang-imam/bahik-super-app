<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserBaru\DashboardUserBaruController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:User Baru'])
  ->prefix('user-baru')
  ->name('user-baru.')
  ->group(function () {
    Route::get('dashboard', [DashboardUserBaruController::class, 'index'])->name('dashboard');
  });
