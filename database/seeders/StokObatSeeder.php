<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StokObat;

class StokObatSeeder extends Seeder
{
  public function run(): void
  {
    $data = [
      [
        'nama' => 'Paracetamol 500mg',
        'jumlah' => 120,
        'lokasi' => 'Gudang A1',
        'tanggal_kadaluarsa' => '2026-05-10',
      ],
      [
        'nama' => 'Amoxicillin 250mg',
        'jumlah' => 75,
        'lokasi' => 'Gudang B2',
        'tanggal_kadaluarsa' => '2025-12-01',
      ],
      [
        'nama' => 'Vitamin C 100mg',
        'jumlah' => 200,
        'lokasi' => 'Gudang C3',
        'tanggal_kadaluarsa' => '2027-01-15',
      ],
    ];
    foreach ($data as $item) {
      StokObat::create($item);
    }
  }
}
