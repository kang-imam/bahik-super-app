<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $provinsis = Provinsi::all();
    foreach ($provinsis as $provinsi) {
      for ($i = 0; $i < 2; $i++) {
        Kota::create([
          'nama' => $faker->city,
          'provinsi_id' => $provinsi->id,
        ]);
      }
    }
  }
}
