<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\WaliSantri\DashboardWaliSantriController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Wali Santri'])->group(function () {
  Route::get('/wali-santri-dashboard', [DashboardWaliSantriController::class, 'index'])->name('wali-santri-dashboard');
});
