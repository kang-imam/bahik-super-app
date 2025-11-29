<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KeuanganMasuk;
use Illuminate\Support\Str;

class KeuanganMasukSeeder extends Seeder
{
  public function run()
  {
    for ($i = 0; $i < 10; $i++) {
      KeuanganMasuk::create([
        'id' => (string) Str::uuid(),
        'kategori' => 'Pendapatan ' . $i,
        'jumlah' => rand(100000, 1000000) / 100,
        'tanggal' => now()->subDays(rand(1, 30)),
        'sumber' => 'Sumber ' . $i,
      ]);
    }
  }
}
