<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\User;
use App\Models\Role;

class KotaSeeder extends Seeder
{
  public function run(): void
  {
    $role = Role::where('slug', 'admin-alumni-cabang')->first();
    $provinsis = Provinsi::all();
    $counter = 1;
    foreach ($provinsis as $provinsi) {
      $kota = Kota::updateOrCreate(
        [
          'nama'        => "Kota " . $provinsi->nama,
          'provinsi_id' => $provinsi->id,
        ],
        [
          'jenis'       => 'kota',
          'nama'        => "Kota " . $provinsi->nama,
          'provinsi_id' => $provinsi->id,
        ]
      );
      Kota::updateOrCreate(
        [
          'nama'        => "Kabupaten " . $provinsi->nama,
          'provinsi_id' => $provinsi->id,
        ],
        [
          'jenis'       => 'kabupaten',
          'nama'        => "Kabupaten " . $provinsi->nama,
          'provinsi_id' => $provinsi->id,
        ]
      );
      $randomName = "Admin Cabang " . $provinsi->nama . " - " . Str::random(5);
      $email = "adminalumnicabang{$counter}@bahik.online";
      User::updateOrCreate(
        ['email' => $email],
        [
          'name'       => $randomName,
          'email'      => $email,
          'password'   => Hash::make('password1234'),
          'role_id'    => $role->id ?? null,
          'akses_type' => Kota::class,
          'akses_id'   => $kota->id,
        ]
      );
      $counter++;
    }
  }
}
