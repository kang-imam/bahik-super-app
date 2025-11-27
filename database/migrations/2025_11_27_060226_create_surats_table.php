<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('surats', function (Blueprint $table) {
      $table->id();

      // Jenis surat: 'masuk' atau 'keluar'
      $table->enum('jenis_surat', ['masuk', 'keluar']);

      $table->string('nomor_surat')->unique(); // Nomor surat unik
      $table->string('pengirim');              // Pengirim surat
      $table->string('penerima');              // Penerima surat
      $table->string('perihal');               // Perihal surat
      $table->date('tanggal');                 // Tanggal surat
      $table->string('file_surat')->nullable(); // File surat, opsional

      $table->timestamps(); // created_at dan updated_at
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('surats');
  }
};
