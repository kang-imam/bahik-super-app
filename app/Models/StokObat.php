<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StokObat extends Model
{
  use SoftDeletes;
  protected $table = 'stok_obats';
  protected $fillable = [
    'nama',
    'jumlah',
    'lokasi',
    'tanggal_kadaluarsa',
  ];
  protected $casts = [
    'tanggal_kadaluarsa' => 'date',
    'jumlah' => 'integer',
  ];
}
