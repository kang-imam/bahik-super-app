<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProvinsiSeeder extends Seeder
{
  public function run(): void
  {
    $provinsis = [
      'Nanggroe Aceh Darussalam',
      'Sumatera Utara',
      'Sumatera Selatan',
      'Sumatera Barat',
      'Bengkulu',
      'Riau',
      'Kepulauan Riau',
      'Jambi',
      'Lampung',
      'Bangka Belitung',
      'Kalimantan Barat',
      'Kalimantan Timur',
      'Kalimantan Selatan',
      'Kalimantan Tengah',
      'Kalimantan Utara',
      'Banten',
      'DKI Jakarta',
      'Jawa Barat',
      'Jawa Tengah',
      'Daerah Istimewa Yogyakarta',
      'Jawa Timur',
      'Bali',
      'Nusa Tenggara Timur',
      'Nusa Tenggara Barat',
      'Gorontalo',
      'Sulawesi Barat',
      'Sulawesi Tengah',
      'Sulawesi Utara',
      'Sulawesi Tenggara',
      'Sulawesi Selatan',
      'Maluku Utara',
      'Maluku',
      'Papua Barat',
      'Papua',
      'Papua Tengah',
      'Papua Pegunungan',
      'Papua Selatan',
      'Papua Barat Daya',
    ];

    $role = Role::where('name', 'Admin Alumni Wilayah')->first();

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
    foreach ($provinsis as $nama) {
      $provinsi = Provinsi::create([
        'nama' => $nama,
      ]);

      // Ambil nama random dari array
      $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

      User::create([
        'name' => $randomName,
        'email' => "adminwilayah{$no}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $role->id,
        'id_akses_type' => Provinsi::class,
        'id_akses' => $provinsi->id,
      ]);
      $no++;
    }
  }
}
