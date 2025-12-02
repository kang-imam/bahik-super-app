<?php

namespace Database\Seeders;

use App\Models\Asrama;
use App\Models\JenisKelamin;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AsramaSeeder extends Seeder
{
  public function run(): void
  {
    $putra = JenisKelamin::where('kode', 'L')->first();
    $putri = JenisKelamin::where('kode', 'P')->first();
    $adminAsramaRole = Role::where('name', 'Admin Asrama')->first();
    $password = 'password123';
    $asramaData = [
      ['nama' => 'Asrama Putra 1', 'jk' => $putra->id],
      ['nama' => 'Asrama Putra 2', 'jk' => $putra->id],
      ['nama' => 'Asrama Putri 1', 'jk' => $putri->id],
      ['nama' => 'Asrama Putri 2', 'jk' => $putri->id],
    ];
    $counter = 1;
    foreach ($asramaData as $data) {
      $asrama = Asrama::updateOrCreate(
        ['nama' => $data['nama']],
        ['jenis_kelamin_id' => $data['jk']]
      );
      $email = "adminasrama{$counter}@bahik.online";
      User::updateOrCreate(
        ['email' => $email],
        [
          'name' => fake()->name(),
          'email' => $email,
          'password' => Hash::make($password),
          'role_id' => $adminAsramaRole->id,
          'jenis_kelamin_id' => $asrama->jenis_kelamin_id,
          'akses_id' => $asrama->id,
          'akses_type' => Asrama::class,
        ]
      );
      $counter++;
    }
  }
}
