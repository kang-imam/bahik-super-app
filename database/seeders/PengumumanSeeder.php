<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use App\Models\User;
use Carbon\Carbon;

class PengumumanSeeder extends Seeder
{
  public function run()
  {
    $user = User::first();
    Pengumuman::create([
      'judul'        => 'Pengumuman Pertama',
      'isi'          => 'Ini adalah isi dari pengumuman pertama. Selamat datang!',
      'dibuat_oleh'  => $user->id,
      'tanggal_terbit' => Carbon::now(),
      'lampiran'     => null,
    ]);
    Pengumuman::create([
      'judul'        => 'Pengumuman Kedua',
      'isi'          => 'Pengumuman kedua berisi informasi penting mengenai kegiatan mendatang.',
      'dibuat_oleh'  => $user->id,
      'tanggal_terbit' => Carbon::now()->addDays(1),
      'lampiran'     => 'lampiran2.pdf',
    ]);
    Pengumuman::create([
      'judul'        => 'Pengumuman Ketiga',
      'isi'          => 'Pengumuman ketiga berisi jadwal seminar yang akan dilaksanakan minggu depan.',
      'dibuat_oleh'  => $user->id,
      'tanggal_terbit' => Carbon::now()->addDays(2),
      'lampiran'     => null,
    ]);
  }
}
