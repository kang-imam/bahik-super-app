<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tagihan;
use App\Models\Santri;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TagihanSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $santris = Santri::all();
    foreach ($santris as $santri) {
      for ($i = 1; $i <= rand(1, 3); $i++) {
        Tagihan::create([
          'id' => (string) Str::uuid(),
          'santri_id' => $santri->id,
          'jenis_tagihan' => $faker->randomElement(['SPP', 'Uang Buku', 'Kegiatan']),
          'nominal' => $faker->randomFloat(2, 100000, 500000),
          'tanggal_terbit' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
          'jatuh_tempo' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
          'status' => $faker->randomElement(['belum lunas', 'lunas']),
        ]);
      }
    }
  }
}
