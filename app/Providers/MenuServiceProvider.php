<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }
  public function boot(): void
  {
    if ($this->app->runningInConsole()) {
      return;
    }
    View::composer('*', function () {
      if (!Auth::check()) {
        view()->share('menuData', [
          [],
          []
        ]);
        return;
      }
      $user = Auth::user();
      $roleName = $user->role->name;
      $roleSlug = str()->slug($roleName);
      $verticalMenuPath = base_path("resources/menu/user/{$roleSlug}.json");
      if (!file_exists($verticalMenuPath)) {
        $verticalMenuPath = base_path("resources/menu/user/default.json");
      }
      $verticalMenuData   = json_decode(@file_get_contents($verticalMenuPath));
      $horizontalMenuData = json_decode(@file_get_contents(base_path('resources/menu/horizontalMenu.json')));
      view()->share('menuData', [
        $verticalMenuData,
        $horizontalMenuData,
      ]);
    });
  }
}
