<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('alumnis', function (Blueprint $table) {
      $table->id();
      $table->uuid('santri_id');
      $table->string('pekerjaan');
      $table->integer('tahun_lulus');
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('santri_id')->references('id')->on('santris')->onDelete('cascade');
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('alumnis');
  }
};
