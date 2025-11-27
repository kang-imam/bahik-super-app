<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggaran extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'santri_id',
    'jenis_pelanggaran',
    'kategori',
    'deskripsi',
    'tanggal',
    'petugas_id',
  ];
  protected $casts = [
    'tanggal' => 'date',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id');
  }
  public function petugas()
  {
    return $this->belongsTo(User::class, 'petugas_id');
  }
}
