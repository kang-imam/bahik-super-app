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
    'tahun_masuk',
    'jenis_kelamin_id',
    'jenjang_pendidikan_id',
    'nis',
  ];

  protected static function booted()
  {
    static::creating(function ($santri) {

      // Generate UUID
      if (empty($santri->{$santri->getKeyName()})) {
        $santri->{$santri->getKeyName()} = (string) Str::uuid();
      }

      // Generate NIS
      $tahunMasukCode = str_pad($santri->tahun_masuk - 1963, 3, '0', STR_PAD_LEFT);
      $jkCode = $santri->jenis_kelamin_id;
      $jpCode = str_pad($santri->jenjang_pendidikan_id, 2, '0', STR_PAD_LEFT);

      $count = Santri::where('tahun_masuk', $santri->tahun_masuk)
        ->where('jenis_kelamin_id', $santri->jenis_kelamin_id)
        ->where('jenjang_pendidikan_id', $santri->jenjang_pendidikan_id)
        ->count() + 1;

      $urut = str_pad($count, 4, '0', STR_PAD_LEFT);

      $santri->nis = "{$tahunMasukCode}-{$jkCode}-{$jpCode}-{$urut}";
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
    return $this->hasMany(WaliSantri::class);
  }

  public function alumni()
  {
    return $this->hasOne(Alumni::class);
  }

  public function jenjangPendidikan()
  {
    return $this->belongsTo(JenjangPendidikan::class);
  }

  protected $casts = [
    'tanggal_lahir' => 'date',
    'tahun_masuk' => 'integer',
  ];
}
