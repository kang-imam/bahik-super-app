<?php

namespace Database\Seeders;

use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NotifikasiSeeder extends Seeder
{
  public function run()
  {
    $faker = Faker::create();
    $users = User::all();
    if ($users->count() > 0) {
      foreach ($users as $user) {
        for ($i = 0; $i < 10; $i++) {
          Notifikasi::create([
            'user_id'    => $user->id,
            'judul'      => $faker->sentence,
            'pesan'      => $faker->paragraph,
            'tanggal'    => $faker->date,
            'status_baca' => $faker->boolean,
          ]);
        }
      }
    }
  }
}
