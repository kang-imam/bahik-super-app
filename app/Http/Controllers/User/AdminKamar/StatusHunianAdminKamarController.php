<?php

namespace App\Http\Controllers\User\AdminKamar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusHunianAdminKamarController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
