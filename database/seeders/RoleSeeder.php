<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
  public function run(): void
  {
    $roles = [
      ['User Baru', 'user-baru', 'Akun baru yang belum memiliki akses khusus'],
      ['Super Admin', 'super-admin', 'Akses penuh untuk seluruh sistem'],
      ['Dewan Kiai', 'dewan-kiai', 'Akses khusus Dewan Kiai'],
      ['Admin Santri', 'admin-santri', 'Pengelolaan data santri'],
      ['Admin Sekretaris', 'admin-sekretaris', 'Pengelolaan surat, dokumentasi, dan sekretariat'],
      ['Admin Bendahara', 'admin-bendahara', 'Pengelolaan keuangan pesantren'],
      ['Admin Keamanan', 'admin-keamanan', 'Pengelolaan keamanan pesantren'],
      ['Admin Pendidikan', 'admin-pendidikan', 'Pengelolaan pendidikan umum'],
      ['Admin Kesehatan', 'admin-kesehatan', 'Pengelolaan data kesehatan santri'],
      ['Admin Asrama', 'admin-asrama', 'Pengelolaan asrama santri'],
      ['Admin Kamar', 'admin-kamar', 'Pengelolaan kamar santri'],
      ['Admin Alumni Pusat', 'admin-alumni-pusat', 'Pengelolaan alumni nasional'],
      ['Admin Alumni Wilayah', 'admin-alumni-wilayah', 'Pengelolaan alumni provinsi'],
      ['Admin Alumni Cabang', 'admin-alumni-cabang', 'Pengelolaan alumni kota'],
      ['Admin Alumni Regional', 'admin-alumni-regional', 'Pengelolaan alumni kecamatan'],
      ['Admin Alumni Daerah', 'admin-alumni-daerah', 'Pengelolaan alumni desa'],
      ['Santri', 'santri', 'Akses bagi santri pesantren'],
      ['Wali Santri', 'wali-santri', 'Akses bagi wali santri'],
      ['Alumni', 'alumni', 'Akses bagi alumni pesantren'],
    ];
    foreach ($roles as $role) {
      Role::updateOrCreate(
        ['slug' => $role[1]],
        [
          'name' => $role[0],
          'slug' => $role[1],
          'keterangan' => $role[2],
        ]
      );
    }
  }
}
