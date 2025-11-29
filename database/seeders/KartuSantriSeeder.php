<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\KartuSantri;

class KartuSantriSeeder extends Seeder
{
  public function run(): void
  {
    $uids = [
      '0001990837',
      '0002091575',
      '0001949795',
      '0002002236',
      '0001969868',
    ];
    $santris = Santri::doesntHave('kartu')
      ->orderBy('nama_panggilan')
      ->take(5)
      ->get();
    foreach ($santris as $index => $santri) {
      if (!isset($uids[$index])) break;
      KartuSantri::create([
        'santri_id' => $santri->id,
        'uid' => $uids[$index],
        'status' => 'cadangan',
      ]);
    }
  }
}
