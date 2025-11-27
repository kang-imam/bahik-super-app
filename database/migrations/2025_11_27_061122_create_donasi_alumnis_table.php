<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('donasi_alumnis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('alumni_id')->constrained('alumnis')->onDelete('cascade');
      $table->decimal('jumlah', 15, 2);
      $table->date('tanggal');
      $table->string('tujuan');
      $table->timestamps();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('donasi_alumnis');
  }
};
