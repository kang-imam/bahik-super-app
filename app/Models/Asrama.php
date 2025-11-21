<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asrama extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'nama',
    'jenis_kelamin_id',
  ];
  public function jenisKelamin()
  {
    return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin_id');
  }
  public function users()
  {
    return $this->morphMany(User::class, 'akses');
  }
}
