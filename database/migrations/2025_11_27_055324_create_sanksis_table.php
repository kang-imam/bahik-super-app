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
      $table->unsignedBigInteger('pelanggaran_id'); // relasi ke tabel pelanggarans
      $table->string('jenis_sanksi'); // jenis sanksi
      $table->string('durasi')->nullable(); // durasi sanksi, bisa berupa string misal "3 hari"
      $table->text('catatan')->nullable(); // catatan tambahan
      $table->enum('status_pelaksanaan', ['belum', 'sedang', 'selesai'])->default('belum'); // status pelaksanaan
      $table->unsignedBigInteger('pelaksana_id')->nullable(); // relasi ke tabel users
      $table->timestamps();

      // Optional: foreign key
      $table->foreign('pelanggaran_id')->references('id')->on('pelanggarans')->onDelete('cascade');
      $table->foreign('pelaksana_id')->references('id')->on('users')->onDelete('set null');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('sanksis');
  }
};
