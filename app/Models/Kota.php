<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kota extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'nama',
    'jenis',
    'provinsi_id'
  ];
  public function provinsi()
  {
    return $this->belongsTo(Provinsi::class);
  }
  public function users()
  {
    return $this->morphMany(User::class, 'akses');
  }
}
