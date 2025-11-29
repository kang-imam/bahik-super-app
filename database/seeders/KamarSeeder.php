<?php

namespace Database\Seeders;

use App\Models\Asrama;
use App\Models\Kamar;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KamarSeeder extends Seeder
{
  public function run(): void
  {
    $password = 'password1234';
    $roleAdminKamar = Role::where('slug', 'admin-kamar')->first();
    $emailCounter = 1;
    $asramas = Asrama::all();
    foreach ($asramas as $asrama) {
      for ($i = 1; $i <= 2; $i++) {
        $kamar = Kamar::create([
          'nama' => 'Kamar ' . $i . ' - ' . $asrama->nama,
          'asrama_id' => $asrama->id,
          'kapasitas' => 10,
        ]);
        $email = "adminkamar{$emailCounter}@bahik.online";
        $emailCounter++;
        User::updateOrCreate(
          ['email' => $email],
          [
            'name' => fake()->name(),
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => $roleAdminKamar->id,
            'jenis_kelamin_id' => $asrama->jenis_kelamin_id,
            'akses_id' => $kamar->id,
            'akses_type' => Kamar::class,
          ]
        );
      }
    }
  }
}
