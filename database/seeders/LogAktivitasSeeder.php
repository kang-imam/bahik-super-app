<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LogAktivitas;

class LogAktivitasSeeder extends Seeder
{
  public function run(): void
  {
    $aktivitasContoh = [
      'Login ke sistem',
      'Logout dari sistem',
      'Mengubah data profil',
      'Menambah data santri',
      'Menghapus data santri',
      'Mengupdate pengaturan aplikasi',
      'Melihat dashboard',
      'Mengakses modul kesehatan',
      'Mengakses modul akademik',
      'Mengupdate password',
    ];
    $users = User::all();
    foreach ($users as $user) {
      for ($i = 0; $i < 3; $i++) {
        LogAktivitas::create([
          'user_id'   => $user->id,
          'aktivitas' => $aktivitasContoh[array_rand($aktivitasContoh)],
          'ip_address' => fake()->ipv4(),
        ]);
      }
    }
    for ($i = 0; $i < 3; $i++) {
      LogAktivitas::create([
        'user_id'   => null,
        'aktivitas' => 'Akses halaman publik oleh pengunjung',
        'ip_address' => fake()->ipv4(),
      ]);
    }
  }
}
