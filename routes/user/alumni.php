<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Alumni\DashboardAlumniController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Alumni'])->group(function () {
  Route::get('/alumni-dashboard', [DashboardAlumniController::class, 'index'])->name('alumni-dashboard');
});
