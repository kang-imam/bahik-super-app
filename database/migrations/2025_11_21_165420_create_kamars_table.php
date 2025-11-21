<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kamars', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->foreignId('asrama_id')->constrained('asramas')->onDelete('cascade');
      $table->integer('kapasitas')->default(1);
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kamars');
  }
};
