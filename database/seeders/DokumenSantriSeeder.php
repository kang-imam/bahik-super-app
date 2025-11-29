<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\DokumenSantri;
use Faker\Factory as Faker;

class DokumenSantriSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $jenisDokumen = [
      'Kartu Keluarga',
      'Akte Kelahiran',
      'KTP Orang Tua',
      'Raport',
      'Ijazah',
      'Surat Pernyataan'
    ];
    $santris = Santri::all();
    foreach ($santris as $santri) {
      $jumlahDokumen = rand(1, 3);
      for ($i = 0; $i < $jumlahDokumen; $i++) {
        DokumenSantri::create([
          'santri_id' => $santri->id,
          'nama' => $faker->randomElement($jenisDokumen),
          'file_path' => 'dokumen/' . $faker->uuid . '.pdf',
          'tanggal_upload' => now(),
        ]);
      }
    }
  }
}
