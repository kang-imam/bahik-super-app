<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenempatanKamar extends Model
{
  use SoftDeletes;
  protected $table = 'penempatan_kamars';
  protected $fillable = [
    'santri_id',
    'kamar_id',
    'tanggal_masuk',
    'tanggal_keluar',
    'status',
  ];
  protected $casts = [
    'tanggal_masuk'  => 'date',
    'tanggal_keluar' => 'date',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
  public function kamar()
  {
    return $this->belongsTo(Kamar::class);
  }
}
