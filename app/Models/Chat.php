<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'pengirim_id',
    'penerima_id',
    'pesan',
    'waktu_kirim',
    'status_baca',
  ];
  public function pengirim()
  {
    return $this->belongsTo(User::class, 'pengirim_id');
  }
  public function penerima()
  {
    return $this->belongsTo(User::class, 'penerima_id');
  }
  public function getWaktuKirimFormattedAttribute()
  {
    return $this->waktu_kirim->format('d-m-Y H:i:s');
  }
}
