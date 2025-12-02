<?php

namespace App\Http\Controllers\User\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Alumni;
use App\Models\Asrama;
use App\Models\Chat;
use App\Models\Desa;
use App\Models\DokumenSantri;
use App\Models\DonasiAlumni;
use App\Models\IzinKesehatan;
use App\Models\JenjangPendidikan;
use App\Models\Kamar;
use App\Models\KartuSantri;
use App\Models\Kecamatan;
use App\Models\KeuanganKeluar;
use App\Models\KeuanganMasuk;
use App\Models\Kota;
use App\Models\LogAktivitas;
use App\Models\Notifikasi;
use App\Models\Pelanggaran;
use App\Models\Pembayaran;
use App\Models\PenempatanKamar;
use App\Models\Pengumuman;
use App\Models\Provinsi;
use App\Models\RekamMedis;
use App\Models\Role;
use App\Models\Sanksi;
use App\Models\Santri;
use App\Models\StokObat;
use App\Models\Surat;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\WaliSantri;

class DashboardSuperAdminController extends Controller
{
  public function index()
  {
    $jumlahTabel = DB::selectOne("SELECT COUNT(*) as count FROM information_schema.tables WHERE table_schema = ?", [env('DB_DATABASE')])->count;
    $jumlahData = 0;
    $tables = DB::select("SHOW TABLES");
    foreach ($tables as $table) {
      $tableName = $table->{"Tables_in_" . env('DB_DATABASE')};
      $jumlahData += DB::table($tableName)->count();
    }
    $totalTabel = number_format($jumlahTabel, 0, ',', '.');
    $totalData = number_format($jumlahData, 0, ',', '.');

    $jumlahTotalSantri = number_format(Santri::count(), 0, ',', '.');
    $jumlahSantriAktif = number_format(Santri::count() - Alumni::count(), 0, ',', '.');
    $jumlahAlumni = number_format(Alumni::count(), 0, ',', '.');

    $jumlahDesa = number_format(Desa::count(), 0, ',', '.');
    $jumlahKecamatan = number_format(Kecamatan::count(), 0, ',', '.');
    $jumlahKota = number_format(Kota::count(), 0, ',', '.');
    $jumlahProvinsi = number_format(Provinsi::count(), 0, ',', '.');

    $jumlahAsrama = number_format(Asrama::count(), 0, ',', '.');
    $jumlahKamar = number_format(Kamar::count(), 0, ',', '.');

    $jumlahChat = number_format(Chat::count(), 0, ',', '.');
    $jumlahDokumenSantri = number_format(DokumenSantri::count(), 0, ',', '.');
    $jumlahDonasiAlumni = number_format(DonasiAlumni::count(), 0, ',', '.');
    $jumlahIzinKesehatan = number_format(IzinKesehatan::count(), 0, ',', '.');
    $jumlahJenjangPendidikan = number_format(JenjangPendidikan::count(), 0, ',', '.');
    $jumlahKartuSantri = number_format(KartuSantri::count(), 0, ',', '.');
    $jumlahKeuanganKeluar = number_format(KeuanganKeluar::count(), 0, ',', '.');
    $jumlahKeuanganMasuk = number_format(KeuanganMasuk::count(), 0, ',', '.');
    $jumlahLogAktivitas = number_format(LogAktivitas::count(), 0, ',', '.');
    $jumlahNotifikasi = number_format(Notifikasi::count(), 0, ',', '.');
    $jumlahPelanggaran = number_format(Pelanggaran::count(), 0, ',', '.');
    $jumlahPembayaran = number_format(Pembayaran::count(), 0, ',', '.');
    $jumlahPenempatanKamar = number_format(PenempatanKamar::count(), 0, ',', '.');
    $jumlahPengumuman = number_format(Pengumuman::count(), 0, ',', '.');
    $jumlahRekamMedis = number_format(RekamMedis::count(), 0, ',', '.');
    $jumlahRole = number_format(Role::count(), 0, ',', '.');
    $jumlahSanksi = number_format(Sanksi::count(), 0, ',', '.');
    $jumlahStokObat = number_format(StokObat::count(), 0, ',', '.');
    $jumlahSurat = number_format(Surat::count(), 0, ',', '.');
    $jumlahTagihan = number_format(Tagihan::count(), 0, ',', '.');
    $jumlahUser = number_format(User::count(), 0, ',', '.');
    $jumlahWaliSantri = number_format(WaliSantri::count(), 0, ',', '.');
    return view('content.user.super-admin.dashboard', compact(
      'totalTabel',
      'totalData',

      'jumlahTotalSantri',
      'jumlahAlumni',
      'jumlahSantriAktif',
      'jumlahDokumenSantri',
      'jumlahKartuSantri',

      'jumlahDesa',
      'jumlahKecamatan',
      'jumlahKota',
      'jumlahProvinsi',

      'jumlahAsrama',
      'jumlahKamar',

      'jumlahChat',
      'jumlahNotifikasi',
      'jumlahPengumuman',

      'jumlahDonasiAlumni',
      'jumlahIzinKesehatan',
      'jumlahJenjangPendidikan',
      'jumlahKeuanganKeluar',
      'jumlahKeuanganMasuk',
      'jumlahLogAktivitas',
      'jumlahPelanggaran',
      'jumlahPembayaran',
      'jumlahPenempatanKamar',
      'jumlahRekamMedis',
      'jumlahRole',
      'jumlahSanksi',
      'jumlahStokObat',
      'jumlahSurat',
      'jumlahTagihan',
      'jumlahUser',
      'jumlahWaliSantri',
    ));
  }
}
