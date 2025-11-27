<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pengumumen', function (Blueprint $table) {
      $table->id();

      $table->string('judul'); // Judul pengumuman
      $table->text('isi');     // Isi pengumuman
      $table->foreignId('dibuat_oleh')->constrained('users')->onDelete('cascade');
      // Relasi ke tabel users
      $table->date('tanggal_terbit'); // Tanggal diterbitkan
      $table->string('lampiran')->nullable(); // File lampiran opsional

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('pengumumen');
  }
};
