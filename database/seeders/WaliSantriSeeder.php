<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Santri;
use App\Models\WaliSantri;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WaliSantriSeeder extends Seeder
{
  public function run(): void
  {
    $role = Role::where('slug', 'wali-santri')->first();
    $santriList = Santri::all();
    $urutan = 1;
    foreach ($santriList as $santri) {
      $email = "walisantri{$urutan}@bahik.online";
      $user = User::updateOrCreate(
        ['email' => $email],
        [
          'name' => "Wali dari {$santri->nama_panggilan}",
          'password'      => Hash::make('password123'),
          'role_id' => $role->id,
        ]
      );
      WaliSantri::updateOrCreate(
        [
          'santri_id' => $santri->id,
          'user_id'   => $user->id,
        ],
        [
          'hubungan' => 'wali',
          'nomor_hp' => '081234567890',
          'alamat' => $santri->alamat,
          'desa_id' => $santri->desa_id,
          'pekerjaan' => 'Petani',
          'penghasilan' => 2000000,
        ]
      );
      $urutan++;
    }
  }
}
