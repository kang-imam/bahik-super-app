<?php

namespace App\Http\Controllers\User\AdminKamar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminKamarController extends Controller
{
  public function index()
  {
    return view('content.user.admin-kamar.dashboard');
  }
}
