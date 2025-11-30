<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatSantriSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.riwayat-santri');
  }
}
