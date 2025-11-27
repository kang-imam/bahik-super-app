<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pembayarans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('tagihan_id'); // relasi ke tabel tagihans
      $table->unsignedBigInteger('santri_id'); // relasi ke tabel santris
      $table->decimal('nominal', 15, 2); // nominal pembayaran
      $table->string('metode_pembayaran'); // contoh: transfer, tunai
      $table->date('tanggal_bayar'); // tanggal pembayaran
      $table->string('bukti_transfer')->nullable(); // path/file bukti transfer, bisa kosong
      $table->timestamps();

      // Optional: foreign key
      $table->foreign('tagihan_id')->references('id')->on('tagihans')->onDelete('cascade');
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('pembayarans');
  }
};
