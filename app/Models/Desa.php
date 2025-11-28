<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desa extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'nama',
    'jenis',
    'kecamatan_id'
  ];
  public function kecamatan()
  {
    return $this->belongsTo(Kecamatan::class);
  }
  public function users()
  {
    return $this->morphMany(User::class, 'akses');
  }
  public function walis()
  {
    return $this->hasMany(WaliSantri::class);
  }
  public function santris()
  {
    return $this->hasMany(Santri::class);
  }
}
