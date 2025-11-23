<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    // Ambil user login
    $user = Auth::user();

    // Default role
    $roleName = $user?->role?->name ?? 'User Baru';

    // Ubah format nama role agar sesuai nama file
    // contoh: "Super Admin" -> "super-admin"
    $roleSlug = str()->slug($roleName);

    // Tentukan path file menu berdasarkan role
    $verticalMenuPath = base_path("resources/menu/user/{$roleSlug}.json");

    // Jika file tidak ada, fallback ke default menu
    if (!file_exists($verticalMenuPath)) {
      $verticalMenuPath = base_path("resources/menu/user/default.json");
    }

    // Load file menu
    $verticalMenuJson = file_get_contents($verticalMenuPath);
    $verticalMenuData = json_decode($verticalMenuJson);

    // Horizontal menu (tidak berubah)
    $horizontalMenuJson = file_get_contents(base_path('resources/menu/horizontalMenu.json'));
    $horizontalMenuData = json_decode($horizontalMenuJson);

    $this->app->make('view')->share('menuData', [
      $verticalMenuData,
      $horizontalMenuData,
    ]);
  }
}
