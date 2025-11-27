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
      $table->string('kategori'); // kategori pemasukan
      $table->decimal('jumlah', 15, 2); // jumlah uang
      $table->date('tanggal'); // tanggal pemasukan
      $table->string('sumber')->nullable(); // sumber dana, bisa kosong
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('keuangan_masuks');
  }
};
