<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserBaru\DashboardUserBaruController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:User Baru'])->group(function () {
  Route::get('/user-baru-dashboard', [DashboardUserBaruController::class, 'index'])->name('user-baru-dashboard');
});
