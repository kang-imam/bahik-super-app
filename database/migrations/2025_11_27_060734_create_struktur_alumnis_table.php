<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('struktur_alumnis', function (Blueprint $table) {
      $table->id();
      $table->foreignId('alumni_id')->constrained('alumnis')->onDelete('cascade');
      $table->enum('level', ['pusat', 'wilayah', 'cabang', 'regional', 'daerah']);
      $table->string('jabatan');
      $table->string('wilayah')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('struktur_alumnis');
  }
};
