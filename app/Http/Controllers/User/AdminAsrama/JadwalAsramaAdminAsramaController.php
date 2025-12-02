<?php

namespace App\Http\Controllers\User\AdminAsrama;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalAsramaAdminAsramaController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
