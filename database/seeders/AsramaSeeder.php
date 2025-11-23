<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asrama;
use App\Models\JenisKelamin;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AsramaSeeder extends Seeder
{
  public function run(): void
  {
    $roleAdminAsrama = Role::firstOrCreate(['name' => 'Admin Asrama']);
    $jenisKelamins = JenisKelamin::all();

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
    foreach ($jenisKelamins as $jk) {
      for ($i = 1; $i <= 3; $i++) {
        $asrama = Asrama::create([
          'nama' => "{$jk->nama} {$i}",
          'jenis_kelamin_id' => $jk->id,
        ]);

        // Ambil nama random dari array
        $randomName = $namaOrangIndonesia[array_rand($namaOrangIndonesia)];

        User::create([
          'name' => $randomName,
          'email' => "adminasrama{$no}@bahik.id",
          'password' => Hash::make('password'),
          'role_id' => $roleAdminAsrama->id,
          'id_akses_type' => Asrama::class,
          'id_akses' => $asrama->id,
        ]);
        $no++;
      }
    }
  }
}
