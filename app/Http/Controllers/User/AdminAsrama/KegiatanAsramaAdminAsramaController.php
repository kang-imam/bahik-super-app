<?php

namespace App\Http\Controllers\User\AdminAsrama;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanAsramaAdminAsramaController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
