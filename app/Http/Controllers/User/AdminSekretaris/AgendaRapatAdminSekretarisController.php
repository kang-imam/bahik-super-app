<?php

namespace App\Http\Controllers\User\AdminSekretaris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaRapatAdminSekretarisController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
