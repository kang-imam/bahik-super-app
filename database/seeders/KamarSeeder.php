<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamar;
use App\Models\Asrama;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KamarSeeder extends Seeder
{
  public function run(): void
  {
    $asramas = Asrama::all();
    $roleAdminKamar = Role::firstOrCreate(['name' => 'Admin Kamar']);

    // Daftar nama asli orang Indonesia
    $namaOrangIndonesia = [
      'Ahmad Fauzi',
      'Siti Nurhaliza',
      'Budi Santoso',
      'Dewi Lestari',
      'Rizky Maulana',
      'Indah Permata',
      'Agus Salim',
      'Fitriani',
      'Hendra Wijaya',
      'Nadia Rahma',
      'Arief Setiawan',
      'Maya Sari',
      'Fajar Pratama',
      'Citra Dewi',
      'Bayu Adi',
      'Rina Handayani'
    ];

    $no = 1;
    foreach ($asramas as $asrama) {
      for ($k = 1; $k <= 3; $k++) {
        $kamar = Kamar::create([
          'nama' => "Kamar {$k}",
          'asrama_id' => $asrama->id,
          'kapasitas' => 4,
        ]);

        // Ambil nama random dari array
        $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

        User::create([
          'name' => $randomName,
          'email' => "adminkamar{$no}@bahik.id",
          'password' => Hash::make('password'),
          'role_id' => $roleAdminKamar->id,
          'id_akses_type' => Kamar::class,
          'id_akses' => $kamar->id,
        ]);
        $no++;
      }
    }
  }
}
