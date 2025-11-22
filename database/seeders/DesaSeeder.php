<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DesaSeeder extends Seeder
{
  public function run(): void
  {
    $adminRole = Role::firstOrCreate(['name' => 'Admin Alumni Daerah']);
    $kecamatans = Kecamatan::all();
    foreach ($kecamatans as $kecamatan) {
      $desa = Desa::create([
        'nama' => 'Desa ' . $kecamatan->id,
        'kecamatan_id' => $kecamatan->id,
      ]);
      User::create([
        'name' => 'Admin Alumni Daerah ' . $desa->nama,
        'email' => 'adminalumni_' . $desa->id . '@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $adminRole->id,
        'id_akses_type' => Desa::class,
        'id_akses' => $desa->id,
      ]);
    }
  }
}
