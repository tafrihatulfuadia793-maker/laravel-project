<?php

use Illuminate\Support\Facades\DB;

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah'];
$mtk = $_POST['mtk'];
$bing = $_POST['bing'];
$bindo = $_POST['bindo'];
$jur1 = $_POST['jur1'];
$jur2 = $_POST['jur2'];
$alasan = $_POST['alasan'];

$simpan = DB::table('pendaftaran_baru')->insert([
    'nama' => $nama,
    'tempat_lahir' => $tempat_lahir,
    'tanggal_lahir' => $tanggal_lahir,
    'jenis_kelamin' => $jk,
    'alamat' => $alamat,
    'sekolah_asal' => $sekolah,
    'nilai_mtk' => $mtk,
    'nilai_binggris' => $bing,
    'nilai_bindo' => $bindo,
    'jurusan1' => $jur1,
    'jurusan2' => $jur2,
    'alasan' => $alasan,
]);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>

    <style>

        body{
            font-family: Arial;
            background:#f4f4f4;
        }

        .container{
            width:700px;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        td{
            border:1px solid #ccc;
            padding:10px;
        }

        h2{
            text-align:center;
        }

        .success{
            background:#d4edda;
            color:#155724;
            padding:10px;
            border-radius:5px;
            margin-bottom:20px;
        }

    </style>

</head>

<body>

<div class="container">

<?php if($simpan){ ?>

<div class="success">
Data berhasil disimpan ke database!
</div>

<h2>Data Pendaftaran</h2>

<table>

<tr>
<td>Nama</td>
<td><?= $nama ?></td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td><?= $tempat_lahir ?></td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td>

<?php

$bulan = [
1=>"Januari","Februari","Maret","April","Mei","Juni",
"Juli","Agustus","September","Oktober","November","Desember"
];

$pecah = explode('-', $tanggal_lahir);

echo $pecah[2]."/".$bulan[(int)$pecah[1]]."/".$pecah[0];

?>

</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td><?= $jk ?></td>
</tr>

<tr>
<td>Alamat</td>
<td><?= $alamat ?></td>
</tr>

<tr>
<td>Sekolah Asal</td>
<td><?= $sekolah ?></td>
</tr>

<tr>
<td>Nilai Matematika</td>
<td><?= $mtk ?></td>
</tr>

<tr>
<td>Nilai Bahasa Inggris</td>
<td><?= $bing ?></td>
</tr>

<tr>
<td>Nilai Bahasa Indonesia</td>
<td><?= $bindo ?></td>
</tr>

<tr>
<td>Jurusan 1</td>
<td><?= $jur1 ?></td>
</tr>

<tr>
<td>Jurusan 2</td>
<td><?= $jur2 ?></td>
</tr>

<tr>
<td>Alasan Masuk</td>
<td><?= $alasan ?></td>
</tr>

</table>

<br><br>

<div style="text-align:center;">
<a href="/uts"
style="
padding:12px 25px;
background:#333;
color:white;
text-decoration:none;
border-radius:5px;
">
Kembali ke Beranda
</a>
</div>

<?php } else { ?>

<h2>Data gagal disimpan!</h2>

<?php } ?>

</div>

</body>
</html>