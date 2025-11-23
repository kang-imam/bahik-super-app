<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'Admin Santri',
      'Admin Sekretaris',
      'Admin Bendahara',
      'Admin Keamanan',
      'Admin Pendidikan',
      'Admin Kesehatan'
    ])->get();

    $jkPutra = JenisKelamin::where('kode', 'Pa')->first();
    $jkPutri = JenisKelamin::where('kode', 'Pi')->first();

    if (!$jkPutra || !$jkPutri) {
      return;
    }

    // Array nama asli
    $namaPutra = ['Ahmad Fauzi', 'Budi Santoso', 'Rizky Pratama', 'Farhan Alfarizi', 'Toni Purnama', 'Syarif Hidayat', 'Bayu Adi', 'Fajar Pratama', 'Arief Setiawan'];
    $namaPutri = ['Siti Aisyah', 'Dewi Lestari', 'Indah Permatasari', 'Lina Salsabila', 'Maya Sari', 'Citra Dewi', 'Fitriani', 'Rina Handayani', 'Nadia Rahma'];

    $counters = [
      'Admin Santri'     => 1,
      'Admin Sekretaris' => 1,
      'Admin Bendahara'  => 1,
      'Admin Keamanan'   => 1,
      'Admin Pendidikan' => 1,
      'Admin Kesehatan'  => 1,
    ];

    foreach ($roles as $role) {
      $slug = strtolower(str_replace(' ', '', $role->name));

      // Buat user laki-laki
      $randomPutra = $namaPutra[array_rand($namaPutra)];
      User::create([
        'name' => $randomPutra,
        'email' => "{$slug}{$counters[$role->name]}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $role->id,
        'id_akses_type' => JenisKelamin::class,
        'id_akses' => $jkPutra->id,
      ]);
      $counters[$role->name]++;

      // Buat user perempuan
      $randomPutri = $namaPutri[array_rand($namaPutri)];
      User::create([
        'name' => $randomPutri,
        'email' => "{$slug}{$counters[$role->name]}@bahik.ponpes.id",
        'password' => Hash::make('password'),
        'role_id' => $role->id,
        'id_akses_type' => JenisKelamin::class,
        'id_akses' => $jkPutri->id,
      ]);
      $counters[$role->name]++;
    }

    // User lain tetap sama
    $userBaruRole = Role::where('name', 'User Baru')->first();
    if ($userBaruRole) {
      User::create([
        'name' => 'User Baru',
        'email' => 'userbaru@bahik.ponpes.id',
        'password' => Hash::make('password'),
        'role_id' => $userBaruRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }

    $superAdminRole = Role::where('name', 'Super Admin')->first();
    if ($superAdminRole) {
      User::create([
        'name' => 'Super Admin',
        'email' => 'superadmin@bahik.ponpes.id',
        'password' => Hash::make('password'),
        'role_id' => $superAdminRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }

    $dewanKiaiRole = Role::where('name', 'Dewan Kiai')->first();
    if ($dewanKiaiRole) {
      User::create([
        'name' => 'Dewan Kiai',
        'email' => 'dewankiai@bahik.ponpes.id',
        'password' => Hash::make('password'),
        'role_id' => $dewanKiaiRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }

    $adminAlumniPusatRole = Role::where('name', 'Admin Alumni Pusat')->first();
    if ($adminAlumniPusatRole) {
      User::create([
        'name' => 'Admin Alumni Pusat',
        'email' => 'adminalumnipusat@bahik.ponpes.id',
        'password' => Hash::make('password'),
        'role_id' => $adminAlumniPusatRole->id,
        'id_akses_type' => null,
        'id_akses' => null,
      ]);
    }
  }
}
