<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaKiaiSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.agenda-kiai');
  }
}
