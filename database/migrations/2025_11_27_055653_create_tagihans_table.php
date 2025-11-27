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
      $table->uuid('santri_id');
      $table->foreign('santri_id')
        ->references('id')
        ->on('santris')
        ->onDelete('cascade');
      $table->string('jenis_tagihan');
      $table->decimal('nominal', 15, 2);
      $table->date('tanggal_terbit');
      $table->date('jatuh_tempo');
      $table->enum('status', ['belum lunas', 'lunas'])
        ->default('belum lunas');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('tagihans');
  }
};
