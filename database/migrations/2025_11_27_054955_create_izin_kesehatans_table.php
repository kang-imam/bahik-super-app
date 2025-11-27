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
      $table->unsignedBigInteger('santri_id'); // relasi ke tabel santri
      $table->enum('jenis_izin', ['rawat', 'berobat', 'pulang']); // jenis izin
      $table->text('alasan'); // alasan izin
      $table->date('tanggal_mulai'); // tanggal mulai izin
      $table->date('tanggal_selesai'); // tanggal selesai izin
      $table->unsignedBigInteger('disetujui_oleh')->nullable(); // relasi ke tabel user yang menyetujui, nullable jika belum disetujui
      $table->timestamps();

      // Optional: tambahkan foreign key
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
      $table->foreign('disetujui_oleh')->references('id')->on('users')->onDelete('set null');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('izin_kesehatans');
  }
};
