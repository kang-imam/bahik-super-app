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
      $table->foreignId('tagihan_id')
        ->constrained('tagihans')
        ->cascadeOnDelete();
      $table->uuid('santri_id');
      $table->foreign('santri_id')
        ->references('id')
        ->on('santris')
        ->onDelete('cascade');
      $table->decimal('nominal', 15, 2);
      $table->string('metode_pembayaran', 50);
      $table->date('tanggal_bayar');
      $table->string('bukti_transfer')->nullable();
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('pembayarans');
  }
};
