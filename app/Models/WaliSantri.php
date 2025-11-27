<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WaliSantri extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    'santri_id',
    'user_id',
    'hubungan',
    'nomor_hp',
    'alamat',
    'desa_id',
    'pekerjaan',
    'penghasilan',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  public function desa()
  {
    return $this->belongsTo(Desa::class);
  }
}
