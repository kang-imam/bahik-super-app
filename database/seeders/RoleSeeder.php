<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  public function run(): void
  {
    $roles = [
      'User Baru',
      'Super Admin',
      'Dewan Kiai',
      'Admin Santri',
      'Admin Alumni',
      'Admin Sekretaris',
      'Admin Bendahara',
      'Admin Keamanan',
      'Admin Pendidikan',
      'Admin Kesehatan',
      'Admin Asrama',
      'Admin Kamar',
      'Santri',
      'Wali Santri',
      'Alumni',
    ];

    foreach ($roles as $role) {
      Role::firstOrCreate(['name' => $role]);
    }
  }
}
