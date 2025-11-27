<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('dokumen_santris', function (Blueprint $table) {
      $table->id();
      $table->foreignUuid('santri_id')
        ->constrained('santris')
        ->onDelete('cascade');
      $table->string('nama');
      $table->string('file_path');
      $table->timestamp('tanggal_upload')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('dokumen_santris');
  }
};
