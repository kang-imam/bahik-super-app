<?php

namespace App\Http\Controllers\User\AdminBendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminBendaharaController extends Controller
{
  public function index()
  {
    return view('content.user.admin-bendahara.dashboard');
  }
}
