<?php

namespace App\Http\Controllers\User\AdminAlumniRegional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaRegionalAdminAlumniRegionalController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
