<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenjangPendidikan;

class JenjangPendidikanSeeder extends Seeder
{
  public function run(): void
  {
    $data = [
      ['kode' => 'MI', 'nama' => 'Madrasah Ibtidaiyah'],
      ['kode' => 'MTS', 'nama' => 'Madrasah Tsanawiyah'],
      ['kode' => 'MA', 'nama' => 'Madrasah Aliyah'],
    ];
    foreach ($data as $item) {
      JenjangPendidikan::create($item);
    }
  }
}
