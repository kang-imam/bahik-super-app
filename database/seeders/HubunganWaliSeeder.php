<?php

namespace Database\Seeders;

use App\Models\Santri;
use App\Models\HubunganWali;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HubunganWaliSeeder extends Seeder
{
  public function run(): void
  {
    $waliRole = Role::where('name', 'Wali Santri')->first();
    if (!$waliRole) {
      dd("Role 'Wali Santri' belum ditemukan. Jalankan RoleSeeder dulu.");
    }
    $santris = Santri::with('user')->get();
    foreach ($santris as $santri) {
      $waliAyah = User::create([
        'name' => 'Ayah ' . $santri->nama_panggilan,
        'email' => 'ayah_' . strtolower(str_replace(' ', '', $santri->user->name)) . '@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $waliRole->id,
      ]);
      HubunganWali::create([
        'santri_id' => $santri->id,
        'user_id'   => $waliAyah->id,
        'jenis_wali' => 'Ayah',
      ]);
      $waliIbu = User::create([
        'name' => 'Ibu ' . $santri->nama_panggilan,
        'email' => 'ibu_' . strtolower(str_replace(' ', '', $santri->user->name)) . '@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $waliRole->id,
      ]);
      HubunganWali::create([
        'santri_id' => $santri->id,
        'user_id'   => $waliIbu->id,
        'jenis_wali' => 'Ibu',
      ]);
    }
  }
}
