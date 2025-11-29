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
      KartuSantriSeeder::class,
      DokumenSantriSeeder::class,
      PenempatanKamarSeeder::class,
      RekamMedisSeeder::class,
      StokObatSeeder::class,
      LogAktivitasSeeder::class,
      IzinKesehatanSeeder::class,
      PelanggaranSeeder::class,
      SanksiSeeder::class,
      TagihanSeeder::class,
      PembayaranSeeder::class,
      KeuanganMasukSeeder::class,
      KeuanganKeluarSeeder::class,
      SuratSeeder::class,
      PengumumanSeeder::class,
      DonasiAlumniSeeder::class,
      ChatSeeder::class,
      NotifikasiSeeder::class,
    ]);
  }
}
