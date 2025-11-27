<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenjangPendidikan extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'kode',
    'nama',
  ];
  public function santri()
  {
    return $this->hasMany(Santri::class, 'jenjang_pendidikan_id');
  }
}
