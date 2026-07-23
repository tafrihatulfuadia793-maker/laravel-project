<?php

use Illuminate\Support\Facades\DB;

$nama = request('nama');
$tempat = request('tempat_lahir');
$tanggal = request('tanggal_lahir');
$jk = request('jenis_kelamin');
$alamat = request('alamat');
$sekolah = request('sekolah_asal');
$mtk = request('nilai_mtk');
$binggris = request('nilai_binggris');
$bindo = request('nilai_bindo');
$jurusan1 = request('jurusan1');
$jurusan2 = request('jurusan2');
$alasan = request('alasan');

DB::table('pendaftaran_baru')->insert([
    'nama' => $nama,
    'tempat_lahir' => $tempat,
    'tanggal_lahir' => $tanggal,
    'jenis_kelamin' => $jk,
    'alamat' => $alamat,
    'sekolah_asal' => $sekolah,
    'nilai_mtk' => $mtk,
    'nilai_binggris' => $binggris,
    'nilai_bindo' => $bindo,
    'jurusan1' => $jurusan1,
    'jurusan2' => $jurusan2,
    'alasan' => $alasan,
]);

header("Location: /data");
exit;

?>