<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SuratSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    foreach (range(1, 10) as $index) {
      Surat::create([
        'jenis_surat' => $faker->randomElement(['masuk', 'keluar']),
        'nomor_surat' => $faker->unique()->numerify('SURAT#####'),
        'pengirim' => $faker->name,
        'penerima' => $faker->name,
        'perihal' => $faker->sentence,
        'tanggal' => $faker->date(),
        'file_surat' => $faker->optional()->word . '.pdf',
      ]);
    }
  }
}
