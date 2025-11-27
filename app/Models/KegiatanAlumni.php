<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KegiatanAlumni extends Model
{
  use SoftDeletes;
  protected $table = 'kegiatan_alumnis';
  protected $fillable = [
    'nama',
    'level_penyelenggara',
    'tanggal',
    'lokasi',
    'deskripsi',
  ];
  protected $dates = [
    'tanggal',
    'created_at',
    'updated_at',
    'deleted_at',
  ];
}
