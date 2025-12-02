<?php

namespace App\Http\Controllers\User\AdminAlumniCabang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataCabangAdminAlumniCabangController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
