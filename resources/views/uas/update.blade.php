<?php

use Illuminate\Support\Facades\DB;

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$sekolah_asal = $_POST['sekolah_asal'];
$nilai_mtk = $_POST['nilai_mtk'];
$nilai_binggris = $_POST['nilai_binggris'];
$nilai_bindo = $_POST['nilai_bindo'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];
$alasan = $_POST['alasan'];

DB::table('pendaftaran_baru')
    ->where('id', $id)
    ->update([
        'nama' => $nama,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat' => $alamat,
        'sekolah_asal' => $sekolah_asal,
        'nilai_mtk' => $nilai_mtk,
        'nilai_binggris' => $nilai_binggris,
        'nilai_bindo' => $nilai_bindo,
        'jurusan1' => $jurusan1,
        'jurusan2' => $jurusan2,
        'alasan' => $alasan,
    ]);

header("Location: /data");
exit;