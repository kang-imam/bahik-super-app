<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('pembayarans', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('tagihan_id')
        ->constrained('tagihans')
        ->cascadeOnDelete();
      $table->unsignedBigInteger('santri_id');
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
      $table->decimal('nominal', 15, 2);
      $table->string('metode_pembayaran', 50);
      $table->date('tanggal_bayar');
      $table->string('bukti_transfer')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('pembayarans');
  }
};
