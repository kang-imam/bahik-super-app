<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KecamatanSeeder extends Seeder
{
  public function run(): void
  {
    $kotas = Kota::all();
    $roleAdminAlumniRegional = Role::firstOrCreate(['name' => 'Admin Alumni Regional']);

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
    foreach ($kotas as $kota) {
      $kecamatan = Kecamatan::create([
        'nama' => 'Kecamatan ' . $kota->id,
        'kota_id' => $kota->id,
      ]);

      // Ambil nama random dari array
      $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

      User::create([
        'name' => $randomName,
        'email' => "adminregional{$no}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $roleAdminAlumniRegional->id,
        'id_akses_type' => Kecamatan::class,
        'id_akses' => $kecamatan->id,
      ]);
      $no++;
    }
  }
}
