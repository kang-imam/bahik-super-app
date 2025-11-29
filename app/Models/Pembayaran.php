<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

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
  protected $primaryKey = 'id';
  protected $keyType = 'string';
  public $incrementing = false;
  protected static function booted()
  {
    static::creating(function ($pembayaran) {
      if (empty($pembayaran->id)) {
        $pembayaran->id = (string) Str::uuid();
      }
    });
  }
  public function tagihan()
  {
    return $this->belongsTo(Tagihan::class);
  }
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
}
