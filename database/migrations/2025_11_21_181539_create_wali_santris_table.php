<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('wali_santris', function (Blueprint $table) {
      $table->id();
      $table->foreignId('santri_id')
        ->constrained('santris')
        ->onDelete('cascade');
      $table->foreignId('user_id')
        ->nullable()
        ->constrained('users')
        ->nullOnDelete();
      $table->enum('hubungan', ['ayah', 'ibu', 'wali']);
      $table->string('nomor_hp', 20)->nullable();
      $table->text('alamat')->nullable();
      $table->foreignId('desa_id')
        ->nullable()
        ->constrained('desas')
        ->nullOnDelete();
      $table->string('pekerjaan')->nullable();
      $table->string('penghasilan')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('wali_santris');
  }
};
