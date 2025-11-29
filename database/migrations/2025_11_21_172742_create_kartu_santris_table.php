<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('kartu_santris', function (Blueprint $table) {
      $table->id();
      $table->foreignId('santri_id')
        ->constrained('santris')
        ->onDelete('cascade');
      $table->string('uid', 100)->unique();
      $table->enum('status', ['aktif', 'cadangan', 'nonaktif'])
        ->default('cadangan');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('kartu_santris');
  }
};
