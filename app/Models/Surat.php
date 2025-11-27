<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{
  use SoftDeletes;
  protected $table = 'surats';
  protected $fillable = [
    'jenis_surat',
    'nomor_surat',
    'pengirim',
    'penerima',
    'perihal',
    'tanggal',
    'file_surat',
  ];
  protected $casts = [
    'tanggal' => 'date',
  ];
}
