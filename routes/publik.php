<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\Publik\HomeController;

Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/', [HomeController::class, 'index'])->name('home');
