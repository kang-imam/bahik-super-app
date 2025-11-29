<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use App\Models\Santri;
use App\Models\User;

class IzinKesehatan extends Model
{
  use SoftDeletes;
  public $incrementing = false;
  protected $keyType = 'string';
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
  protected static function booted()
  {
    static::creating(function ($model) {
      if (empty($model->{$model->getKeyName()})) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }
  public function santri(): BelongsTo
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
  public function disetujuiOleh(): BelongsTo
  {
    return $this->belongsTo(User::class, 'disetujui_oleh', 'id');
  }
}
