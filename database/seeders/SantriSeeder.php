<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SantriSeeder extends Seeder
{
  public function run(): void
  {
    $names = [
      "Ahmad Fauzan",
      "Rizki Setiawan",
      "Dimas Pradipta",
      "Rafi Akbar",
      "Bayu Ramadhan",
      "Aulia Rahma",
      "Nadia Safitri",
      "Putri Amelia",
      "Laila Salsabila",
      "Siti Nurhaliza"
    ];
    for ($i = 1; $i <= 10; $i++) {
      $user = User::create([
        'name' => $names[$i - 1],
        'email' => "santri{$i}@bahik.online",
        'password' => Hash::make('password1234'),
        'role_id' => Role::where('slug', 'santri')->value('id'),
      ]);
      Santri::create([
        'user_id' => $user->id,
        'nik' => fake()->numerify('3276##########'),
        'kk'  => fake()->numerify('3276##########'),
        'nama_panggilan' => explode(' ', $names[$i - 1])[0],
        'tempat_lahir' => fake()->city(),
        'tanggal_lahir' => fake()->date(),
        'tahun_masuk' => 2024,
        'jenis_kelamin_id' => $i <= 5 ? 1 : 2,
        'jenjang_pendidikan_id' => rand(1, 3),
        'alamat' => fake()->address(),
        'desa_id' => rand(1, 5),
        'nomor_hp' => fake()->phoneNumber(),
        'nama_ibu' => fake()->name('female'),
        'nama_ayah' => fake()->name('male'),
        'nama_wali' => fake()->name(),
        'nomor_hp_ibu' => fake()->phoneNumber(),
        'nomor_hp_ayah' => fake()->phoneNumber(),
        'nomor_hp_wali' => fake()->phoneNumber(),
        'status' => 'aktif',
      ]);
    }
  }
}
