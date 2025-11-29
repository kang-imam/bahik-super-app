<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Santri extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    'user_id',
    'nis',
    'nik',
    'kk',
    'nama_panggilan',
    'tempat_lahir',
    'tanggal_lahir',
    'tahun_masuk',
    'jenis_kelamin_id',
    'jenjang_pendidikan_id',
    'alamat',
    'desa_id',
    'nomor_hp',
    'nama_ibu',
    'nama_ayah',
    'nama_wali',
    'nomor_hp_ibu',
    'nomor_hp_ayah',
    'nomor_hp_wali',
    'status',
  ];
  protected $casts = [
    'tanggal_lahir' => 'date',
    'tahun_masuk' => 'integer',
  ];
  protected static function booted()
  {
    static::creating(function ($santri) {
      DB::transaction(function () use ($santri) {
        $lastSantri = Santri::where('tahun_masuk', $santri->tahun_masuk)
          ->where('jenis_kelamin_id', $santri->jenis_kelamin_id)
          ->where('jenjang_pendidikan_id', $santri->jenjang_pendidikan_id)
          ->lockForUpdate()
          ->orderBy('nis', 'desc')
          ->first();
        $tahunMasukCode = str_pad(
          $santri->tahun_masuk - 1963,
          3,
          '0',
          STR_PAD_LEFT
        );
        $jkCode = $santri->jenis_kelamin_id;
        $jpCode = str_pad(
          $santri->jenjang_pendidikan_id,
          2,
          '0',
          STR_PAD_LEFT
        );
        $lastUrut = $lastSantri
          ? intval(substr($lastSantri->nis, -4)) + 1
          : 1;

        $urut = str_pad($lastUrut, 4, '0', STR_PAD_LEFT);
        $santri->nis = "{$tahunMasukCode}-{$jkCode}-{$jpCode}-{$urut}";
      });
    });
    static::deleting(function ($santri) {
      if ($santri->isForceDeleting()) {
        $santri->dokumen()->forceDelete();
      } else {
        $santri->dokumen()->delete();
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
  public function jenjangPendidikan()
  {
    return $this->belongsTo(JenjangPendidikan::class);
  }
  public function walis()
  {
    return $this->hasMany(WaliSantri::class);
  }
  public function alumni()
  {
    return $this->hasOne(Alumni::class);
  }
  public function kartu()
  {
    return $this->hasOne(KartuSantri::class);
  }
  public function dokumen()
  {
    return $this->hasMany(DokumenSantri::class, 'santri_id');
  }
  public function penempatanKamars()
  {
    return $this->hasMany(PenempatanKamar::class, 'santri_id', 'id');
  }
  public function rekamMedis()
  {
    return $this->hasMany(RekamMedis::class, 'santri_id');
  }
}
