<?php

namespace App\Http\Controllers\User\WaliSantri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardWaliSantriController extends Controller
{
  public function index()
  {
    return view('content.user.wali-santri.dashboard');
  }
}
