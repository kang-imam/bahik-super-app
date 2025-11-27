<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenjangPendidikan extends Model
{
  protected $fillable = [
    'kode',
    'nama',
  ];
  public function santri()
  {
    return $this->hasMany(Santri::class, 'jenjang_pendidikan_id');
  }
}
