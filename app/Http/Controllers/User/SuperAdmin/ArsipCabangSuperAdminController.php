<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipCabangSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.arsip-cabang');
  }
}
