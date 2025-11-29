<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DesaSeeder extends Seeder
{
  public function run(): void
  {
    $roleId = Role::where('slug', 'admin-alumni-daerah')->value('id');
    $kecamatans = Kecamatan::all();
    $counter = 1;
    foreach ($kecamatans as $kecamatan) {
      $desa = Desa::create([
        'jenis'        => 'desa',
        'nama'         => 'Desa ' . Str::title(Str::random(6)),
        'kecamatan_id' => $kecamatan->id,
      ]);
      User::create([
        'name'          => 'Admin Alumni Daerah ' . $counter,
        'email'         => 'adminalumnidaerah' . $counter . '@bahik.online',
        'password'      => Hash::make('password1234'),
        'role_id'       => $roleId,
        'akses_id'      => $desa->id,
        'akses_type'    => Desa::class,
      ]);
      $counter++;
      $kelurahan = Desa::create([
        'jenis'        => 'kelurahan',
        'nama'         => 'Kel. ' . Str::title(Str::random(6)),
        'kecamatan_id' => $kecamatan->id,
      ]);
      User::create([
        'name'          => 'Admin Alumni Daerah ' . $counter,
        'email'         => 'adminalumnidaerah' . $counter . '@bahik.online',
        'password'      => Hash::make('password1234'),
        'role_id'       => $roleId,
        'akses_id'      => $kelurahan->id,
        'akses_type'    => Desa::class,
      ]);
      $counter++;
    }
  }
}
