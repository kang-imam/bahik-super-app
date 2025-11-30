<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaRegionalSuperAdminController extends Controller
{
  public function index()
  {
    return view('content.user.super-admin.agenda-regional');
  }
}
