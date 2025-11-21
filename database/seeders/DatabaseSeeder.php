<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call([
      RoleSeeder::class,
      ProvinsiSeeder::class,
      KotaSeeder::class,
      KecamatanSeeder::class,
      DesaSeeder::class,
      AsramaSeeder::class,
      KamarSeeder::class,
      UserSeeder::class,
    ]);
  }
}
