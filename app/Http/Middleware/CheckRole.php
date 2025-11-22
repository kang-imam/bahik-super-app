<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string  $role
   * @return mixed
   */
  public function handle(Request $request, Closure $next, $role)
  {
    $role = trim($role);
    $userRole = Auth::user()->role->name;
    if ($userRole !== $role) {
      abort(403, 'Unauthorized access.');
    }
    return $next($request);
  }
}
