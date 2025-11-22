<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\User;
use App\Models\Role;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KotaSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $role = Role::where('name', 'Admin Alumni Cabang')->first();
    $provinsis = Provinsi::all();
    foreach ($provinsis as $provinsi) {
      $kota = Kota::create([
        'nama' => $faker->city,
        'provinsi_id' => $provinsi->id,
      ]);
      User::create([
        'name' => "Admin Alumni {$kota->nama}",
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('password123'),
        'role_id' => $role->id,
        'id_akses_type' => Kota::class,
        'id_akses' => $kota->id,
      ]);
    }
  }
}
