<?php

namespace App\Http\Controllers\User\AdminAlumniWilayah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminAlumniWilayahController extends Controller
{
  public function index()
  {
    return view('content.user.admin-alumni-wilayah.dashboard');
  }
}
