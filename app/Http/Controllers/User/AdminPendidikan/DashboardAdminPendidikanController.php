<?php

namespace App\Http\Controllers\User\AdminPendidikan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminPendidikanController extends Controller
{
  public function index()
  {
    return view('content.user.admin-pendidikan.dashboard');
  }
}
