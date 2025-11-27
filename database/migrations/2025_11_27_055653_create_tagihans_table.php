<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('tagihans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('santri_id'); // relasi ke tabel santris
      $table->string('jenis_tagihan'); // jenis tagihan
      $table->decimal('nominal', 15, 2); // nominal tagihan, contoh 999999999999.99
      $table->date('tanggal_terbit'); // tanggal diterbitkan
      $table->date('jatuh_tempo'); // tanggal jatuh tempo
      $table->enum('status', ['belum lunas', 'lunas'])->default('belum lunas'); // status pembayaran
      $table->timestamps();

      // Optional: foreign key
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('tagihans');
  }
};
