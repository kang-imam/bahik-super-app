<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KartuSantri extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'santri_id',
    'uid',
    'status',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
}
