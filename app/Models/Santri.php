<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Santri extends Model
{
  use HasFactory, SoftDeletes;
  protected $keyType = 'string';
  public $incrementing = false;
  protected $primaryKey = 'id';
  protected $fillable = [
    'user_id',
    'nama_panggilan',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin_id',
  ];
  protected static function booted()
  {
    static::creating(function ($model) {
      if (empty($model->{$model->getKeyName()})) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function jenisKelamin()
  {
    return $this->belongsTo(JenisKelamin::class);
  }
  public function walis()
  {
    return $this->hasMany(SantriWali::class);
  }
}
