<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Alumni;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
  public function run(): void
  {
    $santriRole = Role::where('name', 'Santri')->first();
    $users = User::where('role_id', $santriRole->id)->limit(5)->get();
    foreach ($users as $user) {
      $user->update([
        'role_id' => Role::where('name', 'Alumni')->first()->id,
      ]);
      Alumni::create([
        'santri_id' => $user->santri->id,
        'pekerjaan' => 'Contoh Pekerjaan',
        'tahun_lulus' => 2025,
      ]);
    }
  }
}
