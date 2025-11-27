<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('izin_kesehatans', function (Blueprint $table) {
      $table->id();
      $table->uuid('santri_id');
      $table->foreign('santri_id')
        ->references('id')
        ->on('santris')
        ->onDelete('cascade');
      $table->enum('jenis_izin', ['rawat', 'berobat', 'pulang']);
      $table->text('alasan');
      $table->date('tanggal_mulai');
      $table->date('tanggal_selesai');
      $table->foreignId('disetujui_oleh')
        ->nullable()
        ->constrained('users')
        ->nullOnDelete();
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('izin_kesehatans');
  }
};
