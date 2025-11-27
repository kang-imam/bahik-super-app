<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('keuangan_masuks', function (Blueprint $table) {
      $table->id();
      $table->string('kategori');
      $table->decimal('jumlah', 15, 2);
      $table->date('tanggal');
      $table->string('sumber')->nullable();
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('keuangan_masuks');
  }
};
