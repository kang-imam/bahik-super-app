<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kamar extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'nama',
    'asrama_id',
    'kapasitas',
  ];
  public function asrama()
  {
    return $this->belongsTo(Asrama::class);
  }
  public function users()
  {
    return $this->morphMany(User::class, 'akses');
  }
}
