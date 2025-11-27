<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('dokumen_santris', function (Blueprint $table) {
      $table->id();

      // Relasi ke tabel santris
      $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');

      // Nama dokumen
      $table->string('nama');

      // Path file
      $table->string('file_path');

      // Tanggal upload
      $table->timestamp('tanggal_upload')->nullable();

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('dokumen_santris');
  }
};
