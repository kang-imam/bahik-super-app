<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasAsramaSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.kas-asrama');
  }
}
