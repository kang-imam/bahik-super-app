<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('santris', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignId('user_id')
        ->constrained()
        ->onDelete('cascade');
      $table->string('nis')->unique();
      $table->string('nik', 16)->nullable();
      $table->string('kk', 16)->nullable();
      $table->string('nama_panggilan');
      $table->string('tempat_lahir');
      $table->date('tanggal_lahir');
      $table->year('tahun_masuk');
      $table->foreignId('jenis_kelamin_id')
        ->constrained('jenis_kelamins');
      $table->foreignId('jenjang_pendidikan_id')
        ->constrained('jenjang_pendidikans');
      $table->text('alamat')->nullable();
      $table->foreignId('desa_id')
        ->nullable()
        ->constrained('desas')
        ->nullOnDelete();
      $table->string('nomor_hp', 20)->nullable();
      $table->string('nama_ibu')->nullable();
      $table->string('nama_ayah')->nullable();
      $table->string('nama_wali')->nullable();
      $table->string('nomor_hp_ibu', 20)->nullable();
      $table->string('nomor_hp_ayah', 20)->nullable();
      $table->string('nomor_hp_wali', 20)->nullable();
      $table->enum('status', ['nonaktif', 'aktif', 'cuti', 'berhenti', 'alumni'])
        ->default('nonaktif');
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('santris');
  }
};
