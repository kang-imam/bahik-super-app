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
      $table->uuid('santri_id');
      $table->foreign('santri_id')
        ->references('id')
        ->on('santris')
        ->onDelete('cascade');
      $table->text('keluhan');
      $table->text('diagnosa')->nullable();
      $table->text('tindakan')->nullable();
      $table->text('obat')->nullable();
      $table->date('tanggal_periksa');
      $table->foreignId('petugas_kesehatan_id')
        ->nullable()
        ->constrained('users')
        ->nullOnDelete();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('rekam_medis');
  }
};
