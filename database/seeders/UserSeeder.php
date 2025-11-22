<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'Admin Santri',
      'Admin Sekretaris',
      'Admin Bendahara',
      'Admin Keamanan',
      'Admin Pendidikan',
      'Admin Kesehatan'
    ])->get();
    $jenisKelaminPutra = JenisKelamin::where('kode', 'Pa')->first();
    $jenisKelaminPutri = JenisKelamin::where('kode', 'Pi')->first();
    if (!$jenisKelaminPutra || !$jenisKelaminPutri) {
      return;
    }
    foreach ($roles as $role) {
      User::create([
        'name' => $role->name . ' Putra',
        'email' => strtolower($role->name) . '_putra@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $role->id,
        'id_akses_type' => JenisKelamin::class,
        'id_akses' => $jenisKelaminPutra->id,
      ]);
      User::create([
        'name' => $role->name . ' Putri',
        'email' => strtolower($role->name) . '_putri@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $role->id,
        'id_akses_type' => JenisKelamin::class,
        'id_akses' => $jenisKelaminPutri->id,
      ]);
    }
    $userBaruRole = Role::where('name', 'User Baru')->first();
    if ($userBaruRole) {
      User::create([
        'name' => 'User Baru',
        'email' => 'user_baru@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $userBaruRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }
    $superAdminRole = Role::where('name', 'Super Admin')->first();
    if ($superAdminRole) {
      User::create([
        'name' => 'Super Admin',
        'email' => 'super_admin@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $superAdminRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }
    $dewanKiaiRole = Role::where('name', 'Dewan Kiai')->first();
    if ($dewanKiaiRole) {
      User::create([
        'name' => 'Dewan Kiai',
        'email' => 'dewan_kiai@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $dewanKiaiRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }
    $adminAlumniPusatRole = Role::where('name', 'Admin Alumni Pusat')->first();
    if ($adminAlumniPusatRole) {
      User::create([
        'name' => 'Admin Alumni Pusat',
        'email' => 'admin_alumni_pusat@example.com',
        'password' => Hash::make('password123'),
        'role_id' => $adminAlumniPusatRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }
  }
}
