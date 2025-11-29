<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class KeuanganMasuk extends Model
{
  use SoftDeletes;
  protected $table = 'keuangan_masuks';
  public $incrementing = false;
  protected $keyType = 'string';
  protected $fillable = [
    'kategori',
    'jumlah',
    'tanggal',
    'sumber',
  ];
  protected $casts = [
    'tanggal' => 'date',
    'jumlah' => 'decimal:2',
  ];
  protected static function booted()
  {
    static::creating(function ($model) {
      if (empty($model->id)) {
        $model->id = (string) Str::uuid();
      }
    });
  }
}
