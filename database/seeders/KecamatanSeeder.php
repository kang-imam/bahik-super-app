<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
  public function run(): void
  {
    $kotas = Kota::all();
    foreach ($kotas as $kota) {
      Kecamatan::create([
        'nama' => 'Kecamatan ' . $kota->id . 'A',
        'kota_id' => $kota->id,
      ]);
      Kecamatan::create([
        'nama' => 'Kecamatan ' . $kota->id . 'B',
        'kota_id' => $kota->id,
      ]);
    }
  }
}
