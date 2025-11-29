<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangPendidikanSeeder extends Seeder
{
  public function run(): void
  {
    DB::table('jenjang_pendidikans')->insert([
      ['kode' => 'PAUD', 'nama' => 'Pendidikan Anak Usia Dini',],
      ['kode' => 'TK', 'nama' => 'Taman Kanak-kanak',],
      ['kode' => 'MI', 'nama' => 'Madrasah Ibtidaiyah',],
      ['kode' => 'SD', 'nama' => 'Sekolah Dasar',],
      ['kode' => 'MTs', 'nama' => 'Madrasah Tsanawiyah',],
      ['kode' => 'SMP', 'nama' => 'Sekolah Menengah Pertama',],
      ['kode' => 'MA', 'nama' => 'Madrasah Aliyah',],
      ['kode' => 'SMA', 'nama' => 'Sekolah Menengah Atas',],
      ['kode' => 'SMK', 'nama' => 'Sekolah Menengah Kejuruan',],
      ['kode' => 'D1', 'nama' => 'Diploma 1',],
      ['kode' => 'D2', 'nama' => 'Diploma 2',],
      ['kode' => 'D3', 'nama' => 'Diploma 3',],
      ['kode' => 'D4', 'nama' => 'Diploma 4',],
      ['kode' => 'S1', 'nama' => 'Strata 1',],
      ['kode' => 'S2', 'nama' => 'Strata 2',],
      ['kode' => 'S3', 'nama' => 'Strata 3',],
      ['kode' => 'Sansus', 'nama' => 'Santri Takhosus',],
    ]);
  }
}
