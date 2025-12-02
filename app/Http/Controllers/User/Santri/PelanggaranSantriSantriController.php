<?php

namespace App\Http\Controllers\User\Santri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelanggaranSantriSantriController extends Controller
{
  public function index()
  {
    return view('content.user.coming-soon');
  }
}
