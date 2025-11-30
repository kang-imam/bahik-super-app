<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatPembayaranSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.riwayat-pembayaran');
  }
}
