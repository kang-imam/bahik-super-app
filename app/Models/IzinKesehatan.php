<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IzinKesehatan extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'santri_id',
    'jenis_izin',
    'alasan',
    'tanggal_mulai',
    'tanggal_selesai',
    'disetujui_oleh',
  ];
  protected $casts = [
    'tanggal_mulai' => 'date',
    'tanggal_selesai' => 'date',
  ];
  public function santri(): BelongsTo
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
  public function disetujuiOleh(): BelongsTo
  {
    return $this->belongsTo(User::class, 'disetujui_oleh', 'id');
  }
}
