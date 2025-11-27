<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('chats', function (Blueprint $table) {
      $table->id();

      $table->foreignId('pengirim_id')->constrained('users')->onDelete('cascade');
      // Relasi ke user pengirim

      $table->foreignId('penerima_id')->constrained('users')->onDelete('cascade');
      // Relasi ke user penerima

      $table->text('pesan'); // Isi pesan
      $table->timestamp('waktu_kirim')->useCurrent(); // Timestamp pesan dikirim
      $table->boolean('status_baca')->default(false); // Status baca, default false

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('chats');
  }
};
