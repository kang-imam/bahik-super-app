<?php

namespace App\Http\Controllers\User\DewanKiai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDewanKiaiController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
