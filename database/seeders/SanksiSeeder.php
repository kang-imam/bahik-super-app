<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sanksi;
use App\Models\Pelanggaran;
use App\Models\User;

class SanksiSeeder extends Seeder
{
  public function run(): void
  {
    $pelanggarans = Pelanggaran::all();
    $users = User::all();
    for ($i = 1; $i <= 20; $i++) {
      $pelanggaran = $pelanggarans->random();
      $pelaksana = $users->isNotEmpty() ? $users->random()->id : null;
      Sanksi::create([
        'pelanggaran_id' => $pelanggaran->id,
        'jenis_sanksi' => fake()->randomElement(['Teguran', 'Skorsing', 'Kerja Sosial']),
        'durasi' => fake()->randomElement(['1 hari', '3 hari', '1 minggu', null]),
        'catatan' => fake()->optional()->sentence(),
        'status_pelaksanaan' => fake()->randomElement(['belum', 'sedang', 'selesai']),
        'pelaksana_id' => $pelaksana,
      ]);
    }
  }
}
