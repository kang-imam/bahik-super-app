<?php

namespace App\Http\Controllers\User\AdminSantri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminSantriController extends Controller
{
  public function index()
  {
    return view('content.user.admin-santri.dashboard');
  }
}
