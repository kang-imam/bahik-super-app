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
    'jenis_wali',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class);
  }
  public function wali()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
