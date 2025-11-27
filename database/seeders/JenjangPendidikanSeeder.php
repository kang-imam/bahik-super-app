<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenjangPendidikan;

class JenjangPendidikanSeeder extends Seeder
{
  public function run(): void
  {
    $data = [
      ['kode' => 'Sansus', 'nama' => 'Santri Takhosus'],
      ['kode' => 'MTs', 'nama' => 'Madrasah Tsanawiyah'],
      ['kode' => 'SMP', 'nama' => 'Sekolah Menengah Pertama'],
      ['kode' => 'MA', 'nama' => 'Madrasah Aliyah'],
      ['kode' => 'SMA', 'nama' => 'Sekolah Menengah Akhir'],
      ['kode' => 'PT', 'nama' => 'Perguruan Tinggi'],
    ];

    JenjangPendidikan::insert($data);
  }
}
