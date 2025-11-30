<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AksesMasukController extends Controller
{
  public function redirect()
  {
    if (Auth::check()) {
      $role = Auth::user()->role->name;
      switch ($role) {
        case 'Super Admin':
          return redirect()->route('super-admin.dashboard');
        case 'User Baru':
          return redirect()->route('user-baru.dashboard');
        case 'Dewan Kiai':
          return redirect()->route('dewan-kiai.dashboard');
        case 'Admin Santri':
          return redirect()->route('admin-santri.dashboard');
        case 'Admin Sekretaris':
          return redirect()->route('admin-sekretaris.dashboard');
        case 'Admin Bendahara':
          return redirect()->route('admin-bendahara.dashboard');
        case 'Admin Keamanan':
          return redirect()->route('admin-keamanan.dashboard');
        case 'Admin Pendidikan':
          return redirect()->route('admin-pendidikan.dashboard');
        case 'Admin Kesehatan':
          return redirect()->route('admin-kesehatan.dashboard');
        case 'Admin Asrama':
          return redirect()->route('admin-asrama.dashboard');
        case 'Admin Kamar':
          return redirect()->route('admin-kamar.dashboard');
        case 'Admin Alumni Pusat':
          return redirect()->route('admin-alumni-pusat.dashboard');
        case 'Admin Alumni Wilayah':
          return redirect()->route('admin-alumni-wilayah.dashboard');
        case 'Admin Alumni Cabang':
          return redirect()->route('admin-alumni-cabang.dashboard');
        case 'Admin Alumni Regional':
          return redirect()->route('admin-alumni-regional.dashboard');
        case 'Admin Alumni Daerah':
          return redirect()->route('admin-alumni-daerah.dashboard');
        case 'Santri':
          return redirect()->route('santri.dashboard');
        case 'Wali Santri':
          return redirect()->route('wali-santri.dashboard');
        case 'Alumni':
          return redirect()->route('alumni.dashboard');
        default:
          return redirect()->route('home');
      }
    }
    return redirect('/');
  }
}
