<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('rekam_medis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
      $table->text('keluhan');
      $table->text('diagnosa')->nullable();
      $table->text('tindakan')->nullable();
      $table->text('obat')->nullable();
      $table->date('tanggal_periksa');
      $table->foreignId('petugas_kesehatan_id')->constrained('users')->onDelete('set null')->nullable();
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('rekam_medis');
  }
};
