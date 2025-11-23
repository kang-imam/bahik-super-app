<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AksesMasukController;

require base_path('routes/publik.php');

Route::get('/dashboard', [AksesMasukController::class, 'redirect'])->name('dashboard');

foreach (glob(base_path('routes/user/*.php')) as $routeFile) {
  require $routeFile;
}
