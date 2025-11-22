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
      [
        'name' => 'Farhan Alfarizi',
        'email' => 'farhan@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Farhan',
        'tempat_lahir' => 'Semarang',
        'tanggal_lahir' => '2011-06-10',
        'jenis_kelamin' => $putra,
      ],
      [
        'name' => 'Lina Salsabila',
        'email' => 'lina@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Lina',
        'tempat_lahir' => 'Medan',
        'tanggal_lahir' => '2010-09-01',
        'jenis_kelamin' => $putri,
      ],
      [
        'name' => 'Toni Purnama',
        'email' => 'toni@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Toni',
        'tempat_lahir' => 'Padang',
        'tanggal_lahir' => '2010-04-20',
        'jenis_kelamin' => $putra,
      ],
      [
        'name' => 'Indah Permatasari',
        'email' => 'indah@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Indah',
        'tempat_lahir' => 'Makassar',
        'tanggal_lahir' => '2011-12-14',
        'jenis_kelamin' => $putri,
      ],
      [
        'name' => 'Syarif Hidayat',
        'email' => 'syarif@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Syarif',
        'tempat_lahir' => 'Bandung',
        'tanggal_lahir' => '2010-05-05',
        'jenis_kelamin' => $putra,
      ],
      [
        'name' => 'Maya Sari',
        'email' => 'maya@example.com',
        'password' => 'password123',
        'nama_panggilan' => 'Maya',
        'tempat_lahir' => 'Bali',
        'tanggal_lahir' => '2011-08-12',
        'jenis_kelamin' => $putri,
      ],
    ];
    foreach ($santris as $data) {
      $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role_id' => $santriRole->id,
        'id_akses_type' => Santri::class,
        'id_akses' => null,
      ]);
      $santri = Santri::create([
        'user_id' => $user->id,
        'nama_panggilan' => $data['nama_panggilan'],
        'tempat_lahir' => $data['tempat_lahir'],
        'tanggal_lahir' => $data['tanggal_lahir'],
        'jenis_kelamin_id' => $data['jenis_kelamin']->id,
      ]);
    }
  }
}
