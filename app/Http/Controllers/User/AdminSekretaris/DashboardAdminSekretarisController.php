<?php

namespace App\Http\Controllers\User\AdminSekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminSekretarisController extends Controller
{
  public function index()
  {
    return view('content.user.admin-sekretaris.dashboard');
  }
}
