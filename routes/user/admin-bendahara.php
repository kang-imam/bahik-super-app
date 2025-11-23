<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminBendahara\DashboardAdminBendaharaController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Bendahara'])->group(function () {
  Route::get('/admin-bendahara-dashboard', [DashboardAdminBendaharaController::class, 'index'])->name('admin-bendahara-dashboard');
});
