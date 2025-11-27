<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pelanggarans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('santri_id'); // relasi ke tabel santri
      $table->string('jenis_pelanggaran'); // jenis pelanggaran
      $table->enum('kategori', ['ringan', 'sedang', 'berat']); // kategori pelanggaran
      $table->text('deskripsi'); // deskripsi pelanggaran
      $table->date('tanggal'); // tanggal pelanggaran
      $table->unsignedBigInteger('petugas_id'); // relasi ke tabel users (petugas)
      $table->timestamps();

      // Optional: foreign key
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
      $table->foreign('petugas_id')->references('id')->on('users')->onDelete('set null');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('pelanggarans');
  }
};
