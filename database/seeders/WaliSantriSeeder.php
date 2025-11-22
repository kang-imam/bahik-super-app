<?php

namespace Database\Seeders;

use App\Models\Santri;
use App\Models\User;
use App\Models\Role;
use App\Models\WaliSantri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WaliSantriSeeder extends Seeder
{
  public function run(): void
  {
    $roleWaliSantri = Role::firstOrCreate(['name' => 'Wali Santri']);
    $santris = Santri::all();
    foreach ($santris as $santri) {
      $jenisWalis = ['Ayah', 'Ibu'];
      foreach ($jenisWalis as $jenis) {
        $user = User::create([
          'name' => $jenis . ' ' . $santri->nama_panggilan,
          'email' => strtolower($jenis . '.' . $santri->nama_panggilan) . '@example.com',
          'password' => Hash::make('password'),
          'role_id' => $roleWaliSantri->id,
          'id_akses_type' => WaliSantri::class,
          'id_akses' => null,
        ]);
        $waliSantri = WaliSantri::create([
          'santri_id' => $santri->id,
          'user_id' => $user->id,
          'jenis_wali' => $jenis,
        ]);
        $user->update([
          'id_akses' => $waliSantri->id,
        ]);
      }
    }
  }
}
