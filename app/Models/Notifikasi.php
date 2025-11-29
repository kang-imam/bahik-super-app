<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notifikasi extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    'user_id',
    'judul',
    'pesan',
    'tanggal',
    'status_baca',
  ];
  protected $casts = [
    'tanggal' => 'date',
    'status_baca' => 'boolean',
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
