<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonasiAlumni extends Model
{
  use SoftDeletes;
  protected $table = 'donasi_alumnis';
  protected $fillable = [
    'alumni_id',
    'jumlah',
    'tanggal',
    'tujuan',
  ];
  public function alumni()
  {
    return $this->belongsTo(Alumni::class, 'alumni_id');
  }
  protected $dates = [
    'tanggal',
    'created_at',
    'updated_at',
    'deleted_at',
  ];
}
