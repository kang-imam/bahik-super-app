<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProvinsiSeeder extends Seeder
{
  public function run(): void
  {
    $provinsis = [
      'Jawa Timur',
      'Jawa Tengah',
      'Jawa Barat',
    ];
    $role = Role::where('slug', 'admin-alumni-wilayah')->first();
    foreach ($provinsis as $index => $namaProvinsi) {
      $provinsi = Provinsi::updateOrCreate(
        ['nama' => $namaProvinsi],
        ['nama' => $namaProvinsi]
      );
      $randomName = 'Admin ' . $namaProvinsi . ' - ' . Str::random(5);
      $email = "adminalumniwilayah" . ($index + 1) . "@bahik.online";
      User::updateOrCreate(
        ['email' => $email],
        [
          'name' => $randomName,
          'email' => $email,
          'password' => Hash::make('password1234'),
          'role_id' => $role->id ?? null,
          'akses_type' => Provinsi::class,
          'akses_id' => $provinsi->id,
        ]
      );
    }
  }
}
