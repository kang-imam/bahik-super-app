<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('asramas', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->foreignId('jenis_kelamin_id')->constrained('jenis_kelamins')->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('asramas');
  }
};
