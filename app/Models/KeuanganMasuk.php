<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KeuanganMasuk extends Model
{
  use SoftDeletes;
  protected $table = 'keuangan_masuks';
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
}
