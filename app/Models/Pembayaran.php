<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'tagihan_id',
    'santri_id',
    'nominal',
    'metode_pembayaran',
    'tanggal_bayar',
    'bukti_transfer',
  ];
  protected $dates = [
    'tanggal_bayar',
    'created_at',
    'updated_at',
    'deleted_at',
  ];
  public function tagihan()
  {
    return $this->belongsTo(Tagihan::class);
  }
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
}
