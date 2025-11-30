<?php

namespace App\Http\Controllers\User\AdminSantri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipSantriAdminSantriController extends Controller
{
  public function index()
  {
    return view('content.user.dewan-kiai.coming-soon');
  }
}
