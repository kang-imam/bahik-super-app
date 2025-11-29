<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggaran;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Support\Str;

class PelanggaranSeeder extends Seeder
{
  public function run(): void
  {
    $santris = Santri::all();
    $petugas = User::all();
    if ($santris->isEmpty() || $petugas->isEmpty()) {
      $this->command->warn("Tidak ada Santri atau User untuk dijadikan petugas.");
      return;
    }
    $faker = \Faker\Factory::create('id_ID');
    foreach ($santris as $santri) {
      $count = rand(1, 3);
      for ($i = 0; $i < $count; $i++) {
        Pelanggaran::create([
          'santri_id' => $santri->id,
          'jenis_pelanggaran' => $faker->sentence(3),
          'kategori' => $faker->randomElement(['ringan', 'sedang', 'berat']),
          'deskripsi' => $faker->paragraph(),
          'tanggal' => $faker->date(),
          'petugas_id' => $petugas->random()->id,
        ]);
      }
    }
  }
}
