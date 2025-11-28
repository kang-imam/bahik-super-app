<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\User;
use App\Models\Role;

class KecamatanSeeder extends Seeder
{
  public function run(): void
  {
    $role = Role::where('slug', 'admin-alumni-regional')->first();
    $kotas = Kota::all();
    $counter = 1;
    foreach ($kotas as $kota) {
      for ($i = 1; $i <= 2; $i++) {
        $kecamatan = Kecamatan::updateOrCreate(
          [
            'nama'    => "Kecamatan {$i} {$kota->nama}",
            'kota_id' => $kota->id,
          ],
          [
            'nama'    => "Kecamatan {$i} {$kota->nama}",
            'kota_id' => $kota->id,
          ]
        );
        $randomName = "Admin Regional {$kecamatan->nama} - " . Str::random(5);
        $email = "adminalumniregionel{$counter}@bahik.online";
        User::updateOrCreate(
          ['email' => $email],
          [
            'name'       => $randomName,
            'email'      => $email,
            'password'   => Hash::make('password1234'),
            'role_id'    => $role->id ?? null,
            'akses_type' => Kecamatan::class,
            'akses_id'   => $kecamatan->id,
          ]
        );
        $counter++;
      }
    }
  }
}
