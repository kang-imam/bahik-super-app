<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::all();
    $aksesCounter = 1;
    foreach ($roles as $role) {
      $roleNameClean = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $role->name));
      for ($i = 1; $i <= 2; $i++) {
        User::create([
          'name' => $role->name . ' User ' . $i,
          'email' => $roleNameClean . $i . '@gmail.com',
          'password' => Hash::make('password'),
          'role_id' => $role->id,
          'id_akses' => $aksesCounter++,
        ]);
      }
    }
  }
}
