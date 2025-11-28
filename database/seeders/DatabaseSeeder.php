<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call([
      RoleSeeder::class,
      AsramaSeeder::class,
      KamarSeeder::class,
      ProvinsiSeeder::class,
      KotaSeeder::class,
      KecamatanSeeder::class,
      DesaSeeder::class,
      JenjangPendidikanSeeder::class,
      SantriSeeder::class,
      WaliSantriSeeder::class,
      AlumniSeeder::class,
      UserSeeder::class,
    ]);
  }
}
