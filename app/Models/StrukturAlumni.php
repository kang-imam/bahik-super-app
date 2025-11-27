<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StrukturAlumni extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'alumni_id',
    'level',
    'jabatan',
    'wilayah'
  ];
  public function alumni()
  {
    return $this->belongsTo(Alumni::class);
  }
}
