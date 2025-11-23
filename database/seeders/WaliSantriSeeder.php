<?php

namespace Database\Seeders;

use App\Models\Santri;
use App\Models\User;
use App\Models\Role;
use App\Models\WaliSantri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WaliSantriSeeder extends Seeder
{
  public function run(): void
  {
    $roleWaliSantri = Role::firstOrCreate(['name' => 'Wali Santri']);
    $santris = Santri::all();

    // Nama wali laki-laki dan perempuan
    $namaAyah = ['Ahmad Fauzi', 'Budi Santoso', 'Rizky Pratama', 'Farhan Alfarizi', 'Toni Purnama', 'Syarif Hidayat', 'Bayu Adi', 'Fajar Pratama', 'Arief Setiawan'];
    $namaIbu = ['Siti Aisyah', 'Dewi Lestari', 'Indah Permatasari', 'Lina Salsabila', 'Maya Sari', 'Citra Dewi', 'Fitriani', 'Rina Handayani', 'Nadia Rahma'];

    $no = 1;
    foreach ($santris as $santri) {
      // Ayah
      $randomAyah = $namaAyah[array_rand($namaAyah)];
      $userAyah = User::create([
        'name' => $randomAyah,
        'email' => "walisantri{$no}@bahik.id",
        'password' => Hash::make('password'),
        'role_id' => $roleWaliSantri->id,
        'id_akses_type' => WaliSantri::class,
        'id_akses' => null,
      ]);
      $waliAyah = WaliSantri::create([
        'santri_id' => $santri->id,
        'user_id' => $userAyah->id,
        'jenis_wali' => 'Ayah',
      ]);
      $userAyah->update(['id_akses' => $waliAyah->id]);
      $no++;

      // Ibu
      $randomIbu = $namaIbu[array_rand($namaIbu)];
      $userIbu = User::create([
        'name' => $randomIbu,
        'email' => "walisantri{$no}@bahik.id",
        'password' => Hash::make('password'),
        'role_id' => $roleWaliSantri->id,
        'id_akses_type' => WaliSantri::class,
        'id_akses' => null,
      ]);
      $waliIbu = WaliSantri::create([
        'santri_id' => $santri->id,
        'user_id' => $userIbu->id,
        'jenis_wali' => 'Ibu',
      ]);
      $userIbu->update(['id_akses' => $waliIbu->id]);
      $no++;
    }
  }
}
