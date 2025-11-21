<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('jenis_kelamins', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->string('kode', 2);
      $table->text('deskripsi')->nullable();
      $table->timestamps();
    });
    DB::table('jenis_kelamins')->insert([
      [
        'nama' => 'Putra',
        'kode' => 'Pa',
        'deskripsi' => 'Santri Putra',
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'nama' => 'Putri',
        'kode' => 'Pi',
        'deskripsi' => 'Santri Putri',
        'created_at' => now(),
        'updated_at' => now(),
      ]
    ]);
  }
  public function down(): void
  {
    Schema::dropIfExists('jenis_kelamins');
  }
};
