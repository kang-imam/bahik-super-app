<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamar;
use App\Models\Asrama;

class KamarSeeder extends Seeder
{
  public function run(): void
  {
    $asramas = Asrama::all();
    foreach ($asramas as $asrama) {
      for ($k = 1; $k <= 3; $k++) {
        Kamar::create([
          'nama' => "Kamar {$k}",
          'asrama_id' => $asrama->id,
          'kapasitas' => 4,
        ]);
      }
    }
  }
}
