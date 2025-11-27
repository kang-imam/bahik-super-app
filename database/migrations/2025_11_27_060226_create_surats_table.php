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
      $table->enum('jenis_surat', ['masuk', 'keluar'])->index();
      $table->string('nomor_surat')->unique();
      $table->string('pengirim');
      $table->string('penerima');
      $table->string('perihal');
      $table->date('tanggal')->index();
      $table->string('file_surat')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('surats');
  }
};
