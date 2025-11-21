<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
  public function run(): void
  {
    $kecamatans = Kecamatan::all();
    foreach ($kecamatans as $kecamatan) {
      Desa::create([
        'nama' => 'Desa ' . $kecamatan->id . 'A',
        'kecamatan_id' => $kecamatan->id,
      ]);
      Desa::create([
        'nama' => 'Desa ' . $kecamatan->id . 'B',
        'kecamatan_id' => $kecamatan->id,
      ]);
    }
  }
}
