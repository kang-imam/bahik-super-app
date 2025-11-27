<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class DokumenSantri extends Model
{
  use HasFactory, SoftDeletes;
  protected $table = 'dokumen_santris';
  protected $fillable = [
    'santri_id',
    'nama',
    'file_path',
    'tanggal_upload',
  ];
  public function santri()
  {
    return $this->belongsTo(Santri::class, 'santri_id');
  }
}
