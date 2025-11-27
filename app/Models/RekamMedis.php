<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekamMedis extends Model
{
  use SoftDeletes;
  protected $table = 'rekam_medis';
  protected $fillable = [
    'santri_id',
    'keluhan',
    'diagnosa',
    'tindakan',
    'obat',
    'tanggal_periksa',
    'petugas_kesehatan_id',
  ];
  protected $casts = [
    'tanggal_periksa' => 'date',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id');
  }
  public function petugasKesehatan()
  {
    return $this->belongsTo(User::class, 'petugas_kesehatan_id');
  }
}
