<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Tagihan extends Model
{
  use SoftDeletes;
  protected $keyType = 'string';
  public $incrementing = false;
  protected $fillable = [
    'santri_id',
    'jenis_tagihan',
    'nominal',
    'tanggal_terbit',
    'jatuh_tempo',
    'status',
  ];
  protected $casts = [
    'nominal' => 'decimal:2',
    'tanggal_terbit' => 'date',
    'jatuh_tempo' => 'date',
  ];
  protected static function booted()
  {
    static::creating(function ($tagihan) {
      if (empty($tagihan->{$tagihan->getKeyName()})) {
        $tagihan->{$tagihan->getKeyName()} = (string) Str::uuid();
      }
    });
  }
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id', 'id');
  }
}
