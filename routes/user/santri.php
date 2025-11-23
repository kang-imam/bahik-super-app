<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Santri\DashboardSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Santri'])->group(function () {
  Route::get('/santri-dashboard', [DashboardSantriController::class, 'index'])->name('santri-dashboard');
});
