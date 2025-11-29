<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengumuman extends Model
{
  use SoftDeletes;
  protected $table = 'pengumumans';
  protected $fillable = [
    'judul',
    'isi',
    'dibuat_oleh',
    'tanggal_terbit',
    'lampiran',
  ];
  protected $dates = [
    'tanggal_terbit',
    'created_at',
    'updated_at',
    'deleted_at',
  ];
  public function pembuat()
  {
    return $this->belongsTo(User::class, 'dibuat_oleh');
  }
}
