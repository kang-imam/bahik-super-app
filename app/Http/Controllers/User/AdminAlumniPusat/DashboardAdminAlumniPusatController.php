<?php

namespace App\Http\Controllers\User\AdminAlumniPusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminAlumniPusatController extends Controller
{
  public function index()
  {
    return view('content.user.admin-alumni-pusat.dashboard');
  }
}
