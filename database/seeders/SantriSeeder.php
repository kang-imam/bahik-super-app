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

    // Nama santri laki-laki
    $namaPutra = [
      'Ahmad Fauzi',
      'Budi Santoso',
      'Rizky Pratama',
      'Farhan Alfarizi',
      'Toni Purnama',
      'Syarif Hidayat',
      'Bayu Adi',
      'Fajar Pratama',
      'Arief Setiawan'
    ];

    // Nama santri perempuan
    $namaPutri = [
      'Siti Aisyah',
      'Dewi Lestari',
      'Indah Permatasari',
      'Lina Salsabila',
      'Maya Sari',
      'Citra Dewi',
      'Fitriani',
      'Rina Handayani',
      'Nadia Rahma'
    ];

    $tempatLahir = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Medan', 'Semarang', 'Padang', 'Makassar', 'Bali'];

    $tanggalLahir = ['2010-01-15', '2011-03-22', '2010-07-10', '2010-11-05', '2011-02-28', '2011-06-10', '2010-09-01', '2010-04-20', '2011-12-14', '2010-05-05', '2011-08-12'];

    $no = 1;

    // Buat santri laki-laki
    foreach ($namaPutra as $nama) {
      $user = User::create([
        'name' => $nama,
        'email' => "santri{$no}@bahik.id",
        'password' => Hash::make('password'),
        'role_id' => $santriRole->id,
        'id_akses_type' => Santri::class,
        'id_akses' => null,
      ]);
      Santri::create([
        'user_id' => $user->id,
        'nama_panggilan' => explode(' ', $nama)[0], // ambil nama depan sebagai panggilan
        'tempat_lahir' => $tempatLahir[array_rand($tempatLahir)],
        'tanggal_lahir' => $tanggalLahir[array_rand($tanggalLahir)],
        'jenis_kelamin_id' => $putra->id,
      ]);
      $no++;
    }

    // Buat santri perempuan
    foreach ($namaPutri as $nama) {
      $user = User::create([
        'name' => $nama,
        'email' => "santri{$no}@bahik.id",
        'password' => Hash::make('password'),
        'role_id' => $santriRole->id,
        'id_akses_type' => Santri::class,
        'id_akses' => null,
      ]);
      Santri::create([
        'user_id' => $user->id,
        'nama_panggilan' => explode(' ', $nama)[0],
        'tempat_lahir' => $tempatLahir[array_rand($tempatLahir)],
        'tanggal_lahir' => $tanggalLahir[array_rand($tanggalLahir)],
        'jenis_kelamin_id' => $putri->id,
      ]);
      $no++;
    }
  }
}
