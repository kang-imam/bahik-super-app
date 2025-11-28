<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Santri;
use App\Models\WaliSantri;
use App\Models\Role;

class WaliSantriSeeder extends Seeder
{
  public function run(): void
  {
    $role = Role::where('slug', 'wali-santri')->first();
    if (!$role) {
      $this->command->error('Role wali-santri tidak ditemukan! Jalankan RoleSeeder dulu.');
      return;
    }
    $santriList = Santri::all();
    if ($santriList->isEmpty()) {
      $this->command->error('Tidak ada data santri! Tambahkan santri dulu sebelum men-seed wali.');
      return;
    }
    $urutan = 1;
    foreach ($santriList as $santri) {
      $email = "walisantri{$urutan}@bahik.online";
      $user = User::updateOrCreate(
        ['email' => $email],
        [
          'name' => "Wali dari {$santri->nama_panggilan}",
          'password' => 'password1234',
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
          'penghasilan' => '2.000.000',
        ]
      );
      $urutan++;
    }
    $this->command->info("Berhasil membuat Wali Santri untuk {$urutan} santri.");
  }
}
