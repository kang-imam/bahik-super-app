<?php

namespace App\Http\Controllers\User\AdminAlumniPusat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotifikasiPusatAdminAlumniPusatController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
