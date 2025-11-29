<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChatSeeder extends Seeder
{
  public function run()
  {
    $users = User::all();
    $pengirim = $users->random();
    $penerima = $users->where('id', '!=', $pengirim->id)->random();
    $chats = [
      ['pesan' => 'Halo! Apa kabar?', 'waktu_kirim' => Carbon::now()->subDays(5)],
      ['pesan' => 'Baik, terima kasih! Kamu bagaimana?', 'waktu_kirim' => Carbon::now()->subDays(5)->addMinutes(10)],
      ['pesan' => 'Saya baik, cuma sibuk akhir-akhir ini.', 'waktu_kirim' => Carbon::now()->subDays(4)->addMinutes(20)],
      ['pesan' => 'Oh, semoga semuanya lancar ya.', 'waktu_kirim' => Carbon::now()->subDays(4)->addMinutes(30)],
      ['pesan' => 'Terima kasih, semoga kita bisa bertemu lagi.', 'waktu_kirim' => Carbon::now()->subDays(3)],
    ];
    foreach ($chats as $chatData) {
      Chat::create([
        'pengirim_id' => $pengirim->id,
        'penerima_id' => $penerima->id,
        'pesan' => $chatData['pesan'],
        'waktu_kirim' => $chatData['waktu_kirim'],
        'status_baca' => false,
      ]);
    }
  }
}
