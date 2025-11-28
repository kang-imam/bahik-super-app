<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $password = 'password1234';
    $simpleRoles = [
      'User Baru'          => 'userbaru@bahik.online',
      'Super Admin'        => 'superadmin@bahik.online',
      'Dewan Kiai'         => 'dewankiai@bahik.online',
      'Admin Alumni Pusat' => 'adminalumnipusat@bahik.online',
    ];
    foreach ($simpleRoles as $roleName => $email) {
      $role = Role::where('name', $roleName)->first();
      if ($role) {
        User::updateOrCreate(
          ['email' => $email],
          [
            'name' => $roleName,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => $role->id,
            'jenis_kelamin_id' => null,
          ]
        );
      }
    }
    $genderPutra = JenisKelamin::where('kode', 'L')->first();
    $genderPutri = JenisKelamin::where('kode', 'P')->first();
    $genderRoles = [
      'Admin Santri',
      'Admin Sekretaris',
      'Admin Bendahara',
      'Admin Keamanan',
      'Admin Pendidikan',
      'Admin Kesehatan',
    ];
    foreach ($genderRoles as $roleName) {
      $role = Role::where('name', $roleName)->first();
      if (!$role) continue;
      User::updateOrCreate(
        ['email' => strtolower(str_replace(' ', '', $roleName)) . 'putra@bahik.online'],
        [
          'name' => $roleName . ' Putra',
          'email' => strtolower(str_replace(' ', '', $roleName)) . 'putra@bahik.online',
          'password' => Hash::make($password),
          'role_id' => $role->id,
          'jenis_kelamin_id' => $genderPutra->id,
        ]
      );
      User::updateOrCreate(
        ['email' => strtolower(str_replace(' ', '', $roleName)) . 'putri@bahik.online'],
        [
          'name' => $roleName . ' Putri',
          'email' => strtolower(str_replace(' ', '', $roleName)) . 'putri@bahik.online',
          'password' => Hash::make($password),
          'role_id' => $role->id,
          'jenis_kelamin_id' => $genderPutri->id,
        ]
      );
    }
  }
}
