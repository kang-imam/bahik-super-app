<?php

namespace App\Http\Controllers\User\AdminKeamanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminKeamananController extends Controller
{
  public function index()
  {
    return view('content.user.admin-keamanan.dashboard');
  }
}
