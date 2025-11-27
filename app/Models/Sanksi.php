<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sanksi extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'pelanggaran_id',
    'jenis_sanksi',
    'durasi',
    'catatan',
    'status_pelaksanaan',
    'pelaksana_id',
  ];
  public function pelanggaran()
  {
    return $this->belongsTo(Pelanggaran::class);
  }
  public function pelaksana()
  {
    return $this->belongsTo(User::class);
  }
}
