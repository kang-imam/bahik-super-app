<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Santri;
use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SantriSeeder extends Seeder
{
  public function run(): void
  {
    $santriRole = Role::where('name', 'Santri')->first();
    $putra = JenisKelamin::where('kode', 'Pa')->first();
    $putri = JenisKelamin::where('kode', 'Pi')->first();
    $santris = [
      [
        'name' => 'Ahmad Fauzi',
        'email' => 'ahmad@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Fauzi',
        'tempat_lahir' => 'Jakarta',
        'tanggal_lahir' => '2010-01-15',
        'jenis_kelamin' => $putra,
      ],
      [
        'name' => 'Siti Aisyah',
        'email' => 'siti@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Aisyah',
        'tempat_lahir' => 'Bandung',
        'tanggal_lahir' => '2011-03-22',
        'jenis_kelamin' => $putri,
      ],
      [
        'name' => 'Budi Santoso',
        'email' => 'budi@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Budi',
        'tempat_lahir' => 'Surabaya',
        'tanggal_lahir' => '2010-07-10',
        'jenis_kelamin' => $putra,
      ],
      [
        'name' => 'Dewi Lestari',
        'email' => 'dewi@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Dewi',
        'tempat_lahir' => 'Yogyakarta',
        'tanggal_lahir' => '2010-11-05',
        'jenis_kelamin' => $putri,
      ],
      [
        'name' => 'Rizky Pratama',
        'email' => 'rizky@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Rizky',
        'tempat_lahir' => 'Medan',
        'tanggal_lahir' => '2011-02-28',
        'jenis_kelamin' => $putra,
      ],
    ];
    foreach ($santris as $data) {
      $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role_id' => $santriRole->id,
      ]);
      Santri::create([
        'user_id' => $user->id,
        'nama_panggilan' => $data['nama_panggilan'],
        'tempat_lahir' => $data['tempat_lahir'],
        'tanggal_lahir' => $data['tanggal_lahir'],
        'jenis_kelamin_id' => $data['jenis_kelamin']->id,
      ]);
    }
  }
}
