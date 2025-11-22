<?php

namespace App\Http\Controllers\User\AdminAlumniDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminAlumniDaerahController extends Controller
{
  public function index()
  {
    return view('content.user.admin-alumni-daerah.dashboard');
  }
}
