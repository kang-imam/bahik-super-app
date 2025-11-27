<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KeuanganKeluar extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'kategori',
    'jumlah',
    'tanggal',
    'tujuan',
  ];
  protected $casts = [
    'tanggal' => 'date',
    'jumlah' => 'decimal:2',
  ];
}
