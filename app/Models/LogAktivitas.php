<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogAktivitas extends Model
{
  use HasFactory, SoftDeletes;
  protected $table = 'log_aktivitas';
  protected $fillable = [
    'user_id',
    'aktivitas',
    'ip_address',
  ];
  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    'deleted_at' => 'datetime',
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
