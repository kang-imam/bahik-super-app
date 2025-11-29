<?php

namespace Database\Seeders;

use App\Models\PenempatanKamar;
use App\Models\Santri;
use App\Models\Kamar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PenempatanKamarSeeder extends Seeder
{
  public function run(): void
  {
    $santris = Santri::where('status', 'aktif')->get();
    $kamars  = Kamar::all();
    foreach ($santris as $santri) {
      $existing = PenempatanKamar::where('santri_id', $santri->id)
        ->where('status', 'aktif')
        ->first();
      if ($existing) {
        continue;
      }
      $kamar = $kamars->random();
      PenempatanKamar::create([
        'santri_id'       => $santri->id,
        'kamar_id'        => $kamar->id,
        'tanggal_masuk'   => Carbon::now()->subDays(rand(1, 30)),
        'tanggal_keluar'  => null,
        'status'          => 'aktif',
      ]);
    }
  }
}
