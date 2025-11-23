<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AdminAlumniDaerah\DashboardAdminAlumniDaerahController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:Admin Alumni Daerah'])->group(function () {
  Route::get('/admin-alumni-daerah-dashboard', [DashboardAdminAlumniDaerahController::class, 'index'])->name('admin-alumni-daerah-dashboard');
});
