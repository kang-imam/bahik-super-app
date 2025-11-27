<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('keuangan_keluars', function (Blueprint $table) {
      $table->id();
      $table->string('kategori'); // kategori pengeluaran
      $table->decimal('jumlah', 15, 2); // jumlah uang
      $table->date('tanggal'); // tanggal pengeluaran
      $table->string('tujuan')->nullable(); // tujuan pengeluaran, bisa kosong
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('keuangan_keluars');
  }
};
