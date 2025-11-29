<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('sanksis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pelanggaran_id')
        ->constrained('pelanggarans')
        ->cascadeOnDelete();
      $table->string('jenis_sanksi');
      $table->string('durasi')->nullable();
      $table->text('catatan')->nullable();
      $table->enum('status_pelaksanaan', ['belum', 'sedang', 'selesai'])
        ->default('belum');
      $table->foreignId('pelaksana_id')
        ->nullable()
        ->constrained('users')
        ->nullOnDelete();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('sanksis');
  }
};
