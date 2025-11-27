<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('alumnis', function (Blueprint $table) {
      $table->id();

      $table->uuid('santri_id');           // Relasi ke santri
      $table->string('pekerjaan');         // Pekerjaan alumni
      $table->integer('tahun_lulus');      // Tahun lulus
      $table->enum('status_verifikasi', ['pending', 'terverifikasi', 'ditolak'])->default('pending');
      // Status verifikasi

      $table->timestamps();
      $table->softDeletes();               // Untuk soft delete

      $table->foreign('santri_id')
        ->references('id')
        ->on('santris')
        ->onDelete('cascade');        // Relasi ke tabel santris
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('alumnis');
  }
};
