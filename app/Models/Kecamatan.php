<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kecamatan extends Model
{
  use SoftDeletes;
  protected $fillable = ['nama', 'kota_id'];
  public function kota()
  {
    return $this->belongsTo(Kota::class);
  }
  public function users()
  {
    return $this->morphMany(User::class, 'akses');
  }
}
