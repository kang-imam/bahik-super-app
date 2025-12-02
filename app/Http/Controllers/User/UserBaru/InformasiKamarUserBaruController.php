<?php

namespace App\Http\Controllers\User\UserBaru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformasiKamarUserBaruController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
