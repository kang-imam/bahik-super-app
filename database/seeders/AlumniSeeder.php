<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\Santri;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
  public function run(): void
  {
    $roleAlumni = Role::where('slug', 'alumni')->first();
    $santris = Santri::orderBy('created_at', 'desc')
      ->take(5)
      ->get();
    foreach ($santris as $santri) {
      $santri->user->update([
        'role_id' => $roleAlumni->id
      ]);
      Alumni::updateOrCreate(
        ['santri_id' => $santri->id],
        [
          'pekerjaan' => fake()->randomElement([
            'Guru',
            'Karyawan Swasta',
            'Wirausahawan',
            'Petani',
            'Mahasiswa',
            'Belum Bekerja'
          ]),
          'tahun_lulus' => now()->year - rand(1, 3),
          'status_verifikasi' => 'pending'
        ]
      );
    }
  }
}
