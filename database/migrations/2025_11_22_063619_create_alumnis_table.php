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
      $table->foreignId('santri_id')
        ->constrained('santris')
        ->onDelete('cascade');
      $table->string('pekerjaan')->nullable();
      $table->integer('tahun_lulus');
      $table->enum('status_verifikasi', ['pending', 'terverifikasi', 'ditolak'])
        ->default('pending');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('alumnis');
  }
};
