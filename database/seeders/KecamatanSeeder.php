<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KecamatanSeeder extends Seeder
{
  public function run(): void
  {
    $kotas = Kota::all();
    $roleAdminAlumniRegional = Role::firstOrCreate(['name' => 'Admin Alumni Regional']);
    foreach ($kotas as $kota) {
      $kecamatan = Kecamatan::create([
        'nama' => 'Kecamatan ' . $kota->id,
        'kota_id' => $kota->id,
      ]);
      User::create([
        'name' => 'Admin Alumni Regional ' . $kecamatan->nama,
        'email' => 'admin_alumni_regional_' . $kecamatan->id . '@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $roleAdminAlumniRegional->id,
        'id_akses_type' => Kecamatan::class,
        'id_akses' => $kecamatan->id,
      ]);
    }
  }
}
