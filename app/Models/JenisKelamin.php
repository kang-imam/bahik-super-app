<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
  protected $table = 'jenis_kelamins';
  protected $fillable = [
    'nama',
    'kode',
    'deskripsi',
  ];
  public function users()
  {
    return $this->hasMany(User::class, 'jenis_kelamin_id');
  }
  public function santri()
  {
    return $this->hasMany(Santri::class, 'jenis_kelamin_id');
  }
}
