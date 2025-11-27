<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('stok_obats', function (Blueprint $table) {
      $table->id(); // Primary key
      $table->string('nama'); // Nama obat
      $table->integer('jumlah'); // Jumlah stok
      $table->string('lokasi'); // Lokasi penyimpanan
      $table->date('tanggal_kadaluarsa'); // Tanggal kadaluarsa
      $table->timestamps(); // created_at dan updated_at
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stok_obats');
  }
};
