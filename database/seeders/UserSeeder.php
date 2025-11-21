<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $roleAdminProvinsi = Role::where('name', 'Admin Alumni Wilayah')->first();
    $provinsi = Provinsi::first();
    User::create([
      'name' => 'Admin Provinsi',
      'email' => 'adminprovinsi@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleAdminProvinsi->id,
      'id_akses_type' => 'App\\Models\\Provinsi',
      'id_akses' => $provinsi->id,
    ]);
    $roleAdminKota = Role::where('name', 'Admin Alumni Cabang')->first();
    $kota = Kota::first();
    User::create([
      'name' => 'Admin Kota',
      'email' => 'adminkota@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleAdminKota->id,
      'id_akses_type' => 'App\\Models\\Kota',
      'id_akses' => $kota->id,
    ]);
    $roleAdminKecamatan = Role::where('name', 'Admin Alumni Regional')->first();
    $kecamatan = Kecamatan::first();
    User::create([
      'name' => 'Admin Kecamatan',
      'email' => 'adminkecamatan@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleAdminKecamatan->id,
      'id_akses_type' => 'App\\Models\\Kecamatan',
      'id_akses' => $kecamatan->id,
    ]);
    $roleAdminDesa = Role::where('name', 'Admin Alumni Daerah')->first();
    $desa = Desa::first();
    User::create([
      'name' => 'Admin Desa',
      'email' => 'admindesa@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleAdminDesa->id,
      'id_akses_type' => 'App\\Models\\Desa',
      'id_akses' => $desa->id,
    ]);
    $roleSantri = Role::where('name', 'Santri')->first();
    User::create([
      'name' => 'Santri 1',
      'email' => 'santri1@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleSantri->id,
      'id_akses_type' => 'App\\Models\\Desa',
      'id_akses' => $desa->id,
    ]);
    $roleWaliSantri = Role::where('name', 'Wali Santri')->first();
    User::create([
      'name' => 'Wali Santri 1',
      'email' => 'walisantri1@example.com',
      'password' => Hash::make('password123'),
      'role_id' => $roleWaliSantri->id,
      'id_akses_type' => 'App\\Models\\Desa',
      'id_akses' => $desa->id,
    ]);
  }
}
