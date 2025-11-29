<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pelanggarans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('santri_id');
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
      $table->string('jenis_pelanggaran');
      $table->enum('kategori', ['ringan', 'sedang', 'berat']);
      $table->text('deskripsi');
      $table->date('tanggal');
      $table->foreignId('petugas_id')
        ->nullable()
        ->constrained('users')
        ->nullOnDelete();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('pelanggarans');
  }
};
