<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagihan extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'santri_id',
    'jenis_tagihan',
    'nominal',
    'tanggal_terbit',
    'jatuh_tempo',
    'status',
  ];
  protected $casts = [
    'nominal' => 'decimal:2',
    'tanggal_terbit' => 'date',
    'jatuh_tempo' => 'date',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
}
