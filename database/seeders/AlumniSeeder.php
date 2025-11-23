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

    // Mengambil data santri terbaru yang berperan sebagai Santri
    $users = User::where('role_id', $santriRole->id)
      ->orderBy('created_at', 'desc') // Mengambil yang terbaru berdasarkan waktu pembuatan
      ->limit(5) // Menampilkan 5 data santri terbaru
      ->get();

    // Menambahkan nomor untuk email
    $emailIndex = 1;

    foreach ($users as $user) {
      $user->update([
        'role_id' => Role::where('name', 'Alumni')->first()->id,
        'email' => 'alumni' . $emailIndex . '@bahik.id', // Mengubah email
      ]);

      Alumni::create([
        'santri_id' => $user->santri->id,
        'pekerjaan' => 'Contoh Pekerjaan',
        'tahun_lulus' => 2025,
      ]);

      // Increment nomor email untuk pengguna berikutnya
      $emailIndex++;
    }
  }
}
