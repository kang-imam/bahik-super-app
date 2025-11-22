<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

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
    foreach ($provinsis as $nama) {
      $provinsi = Provinsi::create([
        'nama' => $nama,
      ]);
      User::create([
        'name' => 'Admin Alumni Wilayah ' . $nama,
        'email' => 'admin.wilayah.' . str_replace(' ', '_', strtolower($nama)) . '@domain.com',
        'password' => bcrypt('password123'),
        'role_id' => $role->id,
        'id_akses_type' => Provinsi::class,
        'id_akses' => $provinsi->id,
      ]);
    }
  }
}
