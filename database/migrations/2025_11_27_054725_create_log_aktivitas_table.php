<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('log_aktivitas', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id'); // id user
      $table->text('aktivitas');            // aktivitas
      $table->string('ip_address', 45);     // ip address (IPv6 bisa sampai 45 karakter)
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('log_aktivitas');
  }
};
