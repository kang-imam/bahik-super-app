<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DewanKiai\DashboardDewanKiaiController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Dewan Kiai'])->group(function () {
  Route::get('/dewan-kiai-dashboard', [DashboardDewanKiaiController::class, 'index'])->name('dewan-kiai-dashboard');
});
