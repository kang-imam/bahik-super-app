<?php

namespace Database\Seeders;

use App\Models\DonasiAlumni;
use App\Models\Alumni;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DonasiAlumniSeeder extends Seeder
{
  public function run()
  {
    $faker = Faker::create();
    $alumni = Alumni::inRandomOrder()->first();
    if ($alumni) {
      DonasiAlumni::create([
        'alumni_id' => $alumni->id,
        'jumlah' => $faker->randomFloat(2, 50, 5000),
        'tanggal' => $faker->date(),
        'tujuan' => 'Bantuan Pendidikan',
      ]);
    }
  }
}
