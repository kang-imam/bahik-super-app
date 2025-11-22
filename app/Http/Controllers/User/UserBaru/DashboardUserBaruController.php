<?php

namespace App\Http\Controllers\User\UserBaru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserBaruController extends Controller
{
  public function index()
  {
    return view('content.user.user-baru.dashboard');
  }
}
