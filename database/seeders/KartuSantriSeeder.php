<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\KartuSantri;

class KartuSantriSeeder extends Seeder
{
  public function run(): void
  {
    // Daftar UID kartu RFID kamu
    $uids = [
      '0001990837',
      '0002091575',
      '0001949795',
      '0002002236',
      '0001969868',
    ];

    // Ambil 5 santri yang belum punya kartu
    $santris = Santri::doesntHave('kartu')
      ->orderBy('nama_panggilan')
      ->take(5)
      ->get();

    foreach ($santris as $index => $santri) {
      // hentikan jika kartu habis
      if (!isset($uids[$index])) break;

      KartuSantri::create([
        'santri_id' => $santri->id, // uuid
        'uid' => $uids[$index],
        'status' => 'cadangan',      // default sesuai tabel
      ]);
    }
  }
}
