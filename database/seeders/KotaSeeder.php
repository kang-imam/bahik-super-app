<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\User;
use App\Models\Role;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KotaSeeder extends Seeder
{
  public function run(): void
  {
    $faker = Faker::create();
    $role = Role::where('name', 'Admin Alumni Cabang')->first();
    $provinsis = Provinsi::all();

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
    foreach ($provinsis as $provinsi) {
      $kota = Kota::create([
        'nama' => $faker->city,
        'provinsi_id' => $provinsi->id,
      ]);

      // Ambil nama random dari array
      $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

      User::create([
        'name' => $randomName,
        'email' => "admincabang{$no}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $role->id,
        'id_akses_type' => Kota::class,
        'id_akses' => $kota->id,
      ]);
      $no++;
    }
  }
}
