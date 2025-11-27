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
      $table->unsignedBigInteger('pengirim_id');
      $table->unsignedBigInteger('penerima_id');
      $table->text('pesan');
      $table->timestamp('waktu_kirim')->useCurrent();
      $table->boolean('status_baca')->default(false);
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('pengirim_id', 'fk_chats_pengirim')
        ->references('id')->on('users')
        ->onDelete('cascade');
      $table->foreign('penerima_id', 'fk_chats_penerima')
        ->references('id')->on('users')
        ->onDelete('cascade');
    });
  }
  public function down(): void
  {
    Schema::dropIfExists('chats');
  }
};
