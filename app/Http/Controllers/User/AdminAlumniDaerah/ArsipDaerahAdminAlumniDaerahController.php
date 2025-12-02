<?php

namespace App\Http\Controllers\User\AdminAlumniDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipDaerahAdminAlumniDaerahController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
