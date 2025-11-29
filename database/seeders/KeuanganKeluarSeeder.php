<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KeuanganKeluar;
use Illuminate\Support\Str;

class KeuanganKeluarSeeder extends Seeder
{
  public function run()
  {
    for ($i = 0; $i < 10; $i++) {
      KeuanganKeluar::create([
        'id' => (string) Str::uuid(),
        'kategori' => 'Pengeluaran ' . $i,
        'jumlah' => rand(50000, 500000) / 100,
        'tanggal' => now()->subDays(rand(1, 30)),
        'tujuan' => 'Tujuan ' . $i,
      ]);
    }
  }
}
