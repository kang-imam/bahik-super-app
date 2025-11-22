<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamar;
use App\Models\Asrama;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KamarSeeder extends Seeder
{
  public function run(): void
  {
    $asramas = Asrama::all();
    $roleAdminKamar = Role::firstOrCreate(['name' => 'Admin Kamar']);
    foreach ($asramas as $asrama) {
      for ($k = 1; $k <= 3; $k++) {
        $kamar = Kamar::create([
          'nama' => "Kamar {$k}",
          'asrama_id' => $asrama->id,
          'kapasitas' => 4,
        ]);
        User::create([
          'name' => "Admin Kamar {$asrama->nama} - {$kamar->nama}",
          'email' => "adminkamar{$asrama->id}_{$k}@example.com",
          'password' => Hash::make('password'),
          'role_id' => $roleAdminKamar->id,
          'id_akses_type' => Kamar::class,
          'id_akses' => $kamar->id,
        ]);
      }
    }
  }
}
