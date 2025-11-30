<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipSuratSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.arsip-surat');
  }
}
