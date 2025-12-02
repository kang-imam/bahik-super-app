<?php

namespace App\Http\Controllers\User\WaliSantri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilAnakWaliSantriController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
