<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kotas', function (Blueprint $table) {
      $table->id();
      $table->enum('jenis', ['kabupaten', 'kota']);
      $table->string('nama');
      $table->foreignId('provinsi_id')->constrained('provinsis')->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kotas');
  }
};
