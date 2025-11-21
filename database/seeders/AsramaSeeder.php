<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asrama;
use App\Models\JenisKelamin;

class AsramaSeeder extends Seeder
{
  public function run(): void
  {
    $jenisKelamins = JenisKelamin::all();
    foreach ($jenisKelamins as $jk) {
      for ($i = 1; $i <= 3; $i++) {
        Asrama::create([
          'nama' => "{$jk->nama} {$i}",
          'jenis_kelamin_id' => $jk->id,
        ]);
      }
    }
  }
}
