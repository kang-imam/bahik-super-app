<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use App\Models\Tagihan;
use App\Models\Santri;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
  public function run()
  {
    $santris = Santri::all();
    $tagihans = Tagihan::all();
    for ($i = 0; $i < 50; $i++) {
      Pembayaran::create([
        'tagihan_id' => $tagihans->random()->id,
        'santri_id' => $santris->random()->id,
        'nominal' => rand(100000, 1000000),
        'metode_pembayaran' => ['Transfer', 'Tunai', 'QRIS'][rand(0, 2)],
        'tanggal_bayar' => now()->subDays(rand(1, 30)),
        'bukti_transfer' => rand(0, 1) ? 'https://via.placeholder.com/150' : null,
      ]);
    }
  }
}
