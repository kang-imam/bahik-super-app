<?php

namespace App\Http\Controllers\User\AdminKesehatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalKlinikAdminKesehatanController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
