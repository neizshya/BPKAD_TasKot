<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landing.beranda.beranda');
});
Route::get('/profile/sejarah_singkat', function () {
    return view('landing.profile.sejarah_singkat.sejarah_singkat');
});
Route::get('/profile/visi_misi', function () {
    return view('landing.profile.visi_misi.visi_misi');
});
Route::get('/profile/tugas_fungsi', function () {
    return view('landing.profile.tugas_fungsi.tugas_fungsi');
});
Route::get('/profile/struktur_organisasi', function () {
    return view('landing.profile.struktur_organisasi.struktur_organisasi');
});
Route::get('/informasi_publik/renstra', function () {
    return view('landing.informasi_publik.renstra.renstra');
});
Route::get('/informasi_publik/renja', function () {
    return view('landing.informasi_publik.renja.renja');
});
Route::get('/informasi_publik/rencana_aksi', function () {
    return view('landing.informasi_publik.rencana_aksi.rencana_aksi');
});
Route::get('/informasi_publik/pohon_kinerja', function () {
    return view('landing.informasi_publik.pohon_kinerja.pohon_kinerja');
});
Route::get('/informasi_publik/perjanjian_kinerja', function () {
    return view('landing.informasi_publik.perjanjian_kinerja.perjanjian_kinerja');
});
Route::get('/informasi_publik/monev', function () {
    return view('landing.informasi_publik.monev.monev');
});
Route::get('/informasi_publik/lkip', function () {
    return view('landing.informasi_publik.lkip.lkip');
});
Route::get('/informasi_publik/iku', function () {
    return view('landing.informasi_publik.iku.iku');
});
Route::get('/informasi_publik/cascading', function () {
    return view('landing.informasi_publik.cascading.cascading');
});
Route::get('/informasi_publik/berita', function () {
    return view('landing.informasi_publik.berita.berita');
});
Route::get('/informasi_publik/berita/title', function () {
    return view('landing.informasi_publik.berita.detail.detail_berita');
});
Route::get('/regulasi/peraturan_daerah', function () {
    return view('landing.regulasi.peraturan_daerah.peraturan_daerah');
});
Route::get('/regulasi/peraturan_daerah/nama-file', function () {
    return view('landing.regulasi.peraturan_daerah.detail.peraturan_daerah_detail');
});
Route::get('/regulasi/peraturan_gubernur', function () {
    return view('landing.regulasi.peraturan_gubernur.peraturan_gubernur');
});
Route::get('/regulasi/peraturan_gubernur/nama-file', function () {
    return view('landing.regulasi.peraturan_gubernur.detail.peraturan_gubernur_detail');
});
Route::get('/regulasi/peraturan_menteri', function () {
    return view('landing.regulasi.peraturan_menteri.peraturan_menteri');
});
Route::get('/regulasi/peraturan_menteri/nama-file', function () {
    return view('landing.regulasi.peraturan_menteri.detail.peraturan_menteri_detail');
});
Route::get('/regulasi/peraturan_pemerintah', function () {
    return view('landing.regulasi.peraturan_pemerintah.peraturan_pemerintah');
});
Route::get('/regulasi/peraturan_pemerintah/nama-file', function () {
    return view('landing.regulasi.peraturan_pemerintah.detail.peraturan_pemerintah_detail');
});
Route::get('/regulasi/peraturan_walikota', function () {
    return view('landing.regulasi.peraturan_walikota.peraturan_walikota');
});
Route::get('/regulasi/peraturan_walikota/nama-file', function () {
    return view('landing.regulasi.peraturan_walikota.detail.peraturan_walikota_detail');
});
Route::get('/regulasi/undang-undang', function () {
    return view('landing.regulasi.undang_undang.undang_undang');
});
Route::get('/regulasi/undang-undang/nama-file', function () {
    return view('landing.regulasi.undang_undang.detail.undang_undang_detail');
});
Route::get('/galeri', function () {
    return view('landing.galeri.galeri');
});

Route::get('/ppid/mekanisme_pelayanan', function () {
    return view('landing.ppid.mekanisme_pelayanan.mekanisme_pelayanan');
});
Route::get('/ppid/pengajuan_keberatan', function () {
    return view('landing.ppid.pengajuan_keberatan.pengajuan_keberatan');
});
Route::get('/ppid/permohonan_informasi', function () {
    return view('landing.ppid.permohonan_informasi.permohonan_informasi');
});
Route::get('/cek_tiket', function () {
    return view('landing.tiket.tiket');
});
Route::get('/dashboard/main', function () {
    return view('dashboard.main.main');
});
Route::get('/dashboard/berita', function () {
    return view('dashboard.berita.berita');
});
Route::get('/dashboard/berita/kategori', function () {
    return view('dashboard.berita.kategori_berita.kategori_berita');
});
Route::get('/dashboard/galeri/video', function () {
    return view('dashboard.galeri.video.video_galeri');
});
Route::get('/dashboard/galeri/foto', function () {
    return view('dashboard.galeri.foto.foto_galeri');
});
Route::get('/dashboard/informasi_publik', function () {
    return view('dashboard.informasi_publik.informasi_publik');
});
Route::get('/dashboard/regulasi', function () {
    return view('dashboard.regulasi.regulasi');
});
Route::get('/dashboard/pengaturan', function () {
    return view('dashboard.pengaturan.pengaturan');
});
Route::get('/dashboard/pesan', function () {
    return view('dashboard.pesan.pesan');
});
