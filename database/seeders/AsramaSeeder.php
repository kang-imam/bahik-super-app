<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asrama;
use App\Models\JenisKelamin;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AsramaSeeder extends Seeder
{
  public function run(): void
  {
    $roleAdminAsrama = Role::firstOrCreate(['name' => 'Admin Asrama']);
    $jenisKelamins = JenisKelamin::all();
    foreach ($jenisKelamins as $jk) {
      for ($i = 1; $i <= 3; $i++) {
        $asrama = Asrama::create([
          'nama' => "{$jk->nama} {$i}",
          'jenis_kelamin_id' => $jk->id,
        ]);
        User::create([
          'name' => "Admin {$asrama->nama}",
          'email' => strtolower("admin{$asrama->id}@asrama.com"),
          'password' => Hash::make('password123'),
          'role_id' => $roleAdminAsrama->id,
          'id_akses_type' => Asrama::class,
          'id_akses' => $asrama->id,
        ]);
      }
    }
  }
}
