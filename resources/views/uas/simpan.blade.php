<?php

include(app_path('koneksi_uas.php'));

$nama = $_POST['nama'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah_asal'];
$mtk = $_POST['nilai_mtk'];
$binggris = $_POST['nilai_binggris'];
$bindo = $_POST['nilai_bindo'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];
$alasan = $_POST['alasan'];

$query = mysqli_query($conn,
"INSERT INTO pendaftaran_baru
(
nama,
tempat_lahir,
tanggal_lahir,
jenis_kelamin,
alamat,
sekolah_asal,
nilai_mtk,
nilai_binggris,
nilai_bindo,
jurusan1,
jurusan2,
alasan
)

VALUES
(
'$nama',
'$tempat',
'$tanggal',
'$jk',
'$alamat',
'$sekolah',
'$mtk',
'$binggris',
'$bindo',
'$jurusan1',
'$jurusan2',
'$alasan'
)");

if ($query) {
    header("Location: /data");
    exit;
} else {
    echo "Data gagal disimpan : " . mysqli_error($conn);
}

?>