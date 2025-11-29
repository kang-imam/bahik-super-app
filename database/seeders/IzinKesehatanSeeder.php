<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IzinKesehatan;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Support\Str;

class IzinKesehatanSeeder extends Seeder
{
  public function run(): void
  {
    $santris = Santri::all();
    $users = User::all();
    for ($i = 0; $i < 50; $i++) {
      $santri = $santris->random();
      $user = $users->isNotEmpty() ? $users->random() : null;
      $tanggal_mulai = now()->subDays(rand(0, 30));
      $tanggal_selesai = (clone $tanggal_mulai)->addDays(rand(1, 7));
      IzinKesehatan::create([
        'id' => (string) Str::uuid(),
        'santri_id' => $santri->id,
        'jenis_izin' => ['rawat', 'berobat', 'pulang'][array_rand(['rawat', 'berobat', 'pulang'])],
        'alasan' => 'Alasan izin contoh #' . ($i + 1),
        'tanggal_mulai' => $tanggal_mulai,
        'tanggal_selesai' => $tanggal_selesai,
        'disetujui_oleh' => $user?->id,
      ]);
    }
  }
}
