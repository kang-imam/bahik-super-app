<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    'santri_id',
    'pekerjaan',
    'tahun_lulus',
    'status_verifikasi',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id');
  }
}
