<?php

namespace App\Http\Controllers\User\AdminKesehatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminKesehatanController extends Controller
{
  public function index()
  {
    return view('content.user.admin-kesehatan.dashboard');
  }
}
