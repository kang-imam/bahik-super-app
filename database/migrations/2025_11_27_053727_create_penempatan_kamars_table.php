<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('penempatan_kamars', function (Blueprint $table) {
      $table->id();

      // Relasi ke santri
      $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');

      // Relasi ke kamar
      $table->foreignId('kamar_id')->constrained('kamars')->onDelete('cascade');

      // Tanggal masuk & keluar
      $table->date('tanggal_masuk');
      $table->date('tanggal_keluar')->nullable();

      // Status penempatan (misal: aktif, nonaktif)
      $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('penempatan_kamars');
  }
};
