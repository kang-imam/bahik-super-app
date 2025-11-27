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
      $table->foreignUuid('santri_id')
        ->constrained('santris')
        ->onDelete('cascade');
      $table->foreignId('kamar_id')
        ->constrained('kamars')
        ->onDelete('cascade');
      $table->date('tanggal_masuk');
      $table->date('tanggal_keluar')->nullable();
      $table->enum('status', ['aktif', 'nonaktif'])
        ->default('aktif');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('penempatan_kamars');
  }
};
