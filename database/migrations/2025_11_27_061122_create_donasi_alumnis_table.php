<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('donasi_alumnis', function (Blueprint $table) {
      $table->id();

      $table->foreignId('alumni_id')->constrained('alumnis')->onDelete('cascade');
      // Relasi ke tabel alumnis

      $table->decimal('jumlah', 15, 2); // Jumlah donasi, misal 100000.50
      $table->date('tanggal');           // Tanggal donasi
      $table->string('tujuan');          // Tujuan donasi

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('donasi_alumnis');
  }
};
