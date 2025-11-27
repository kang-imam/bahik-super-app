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
    return $this->morphMany(User::class, 'akses');
  }
  public function santri()
  {
    return $this->hasMany(Santri::class, 'jenis_kelamin_id');
  }
}
