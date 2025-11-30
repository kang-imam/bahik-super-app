<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturPusatSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.struktur-pusat');
  }
}
