<?php

namespace App\Http\Controllers\User\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanAlumniAlumniController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
