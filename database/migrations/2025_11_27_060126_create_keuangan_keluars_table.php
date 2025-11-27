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
      $table->string('kategori');
      $table->decimal('jumlah', 15, 2);
      $table->date('tanggal');
      $table->string('tujuan')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('keuangan_keluars');
  }
};
