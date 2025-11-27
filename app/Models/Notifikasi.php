<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notifikasi extends Model
{
  use HasFactory, SoftDeletes;

  // Menentukan field mana yang bisa diisi secara mass-assignment
  protected $fillable = [
    'user_id',
    'judul',
    'pesan',
    'tanggal',
    'status_baca',
  ];

  // Jika tanggal adalah tipe data yang harus diparse ke format date, seperti 'tanggal'
  protected $casts = [
    'tanggal' => 'date', // Ini untuk memastikan 'tanggal' diparse sebagai tanggal
    'status_baca' => 'boolean', // Pastikan 'status_baca' diparse sebagai boolean
  ];

  // Relasi ke model User, karena ada foreign key 'user_id'
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
