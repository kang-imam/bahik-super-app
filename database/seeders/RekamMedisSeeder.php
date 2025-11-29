<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RekamMedis;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Support\Carbon;

class RekamMedisSeeder extends Seeder
{
  public function run(): void
  {
    $santris = Santri::all();
    $petugas = User::whereHas('role', function ($q) {
      $q->where('slug', 'petugas-kesehatan');
    })->first();
    foreach ($santris as $santri) {
      RekamMedis::create([
        'santri_id' => $santri->id,
        'keluhan' => fake()->sentence(8),
        'diagnosa' => fake()->sentence(6),
        'tindakan' => fake()->sentence(4),
        'obat' => fake()->words(3, true),
        'tanggal_periksa' => Carbon::now()->subDays(rand(1, 120)),
        'petugas_kesehatan_id' => $petugas?->id,
      ]);
    }
  }
}
