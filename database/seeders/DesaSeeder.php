<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DesaSeeder extends Seeder
{
  public function run(): void
  {
    $adminRole = Role::firstOrCreate(['name' => 'Admin Alumni Daerah']);
    $kecamatans = Kecamatan::all();

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
    foreach ($kecamatans as $kecamatan) {
      $desa = Desa::create([
        'nama' => 'Desa ' . $kecamatan->id,
        'kecamatan_id' => $kecamatan->id,
      ]);

      // Ambil nama random dari array
      $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

      User::create([
        'name' => $randomName,
        'email' => "admindaerah{$no}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $adminRole->id,
        'id_akses_type' => Desa::class,
        'id_akses' => $desa->id,
      ]);
      $no++;
    }
  }
}
