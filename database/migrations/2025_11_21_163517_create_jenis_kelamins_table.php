<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    // Membuat tabel jenis_kelamins
    Schema::create('jenis_kelamins', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('kode', 2);  // Kode untuk Laki-laki (Pa) dan Perempuan (Pi)
      $table->text('deskripsi')->nullable();  // Deskripsi bisa kosong, jadi nullable
      $table->timestamps();
    });

    // Menambahkan data jenis kelamin Putra dan Putri
    DB::table('jenis_kelamins')->insert([
      [
        'nama' => 'Putra',
        'kode' => 'Pa',  // Kode untuk Putra
        'deskripsi' => 'Santri Putra',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama' => 'Putri',
        'kode' => 'Pi',  // Kode untuk Putri
        'deskripsi' => 'Santri Putri',
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
  }

  public function down(): void
  {
    // Menghapus tabel jenis_kelamins saat rollback
    Schema::dropIfExists('jenis_kelamins');
  }
};
