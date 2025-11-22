<?php

namespace App\Http\Controllers\User\AdminAlumniRegional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminAlumniRegionalController extends Controller
{
  public function index()
  {
    return view('content.user.admin-alumni-regional.dashboard');
  }
}
