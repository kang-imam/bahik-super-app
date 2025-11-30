<?php

namespace App\Http\Controllers\User\DewanKiai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapKehadiranDewanKiaiController extends Controller
{
  public function index()
  {
    return view('content.user.dewan-kiai.coming-soon');
  }
}
