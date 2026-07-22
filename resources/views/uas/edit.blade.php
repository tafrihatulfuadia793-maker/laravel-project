<?php

include(app_path('koneksi_uas.php'));

$id = $_GET['id'];

$query = mysqli_query($conn,
"SELECT * FROM pendaftaran_baru WHERE id='$id'");

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
</head>

<body>

<h2>Edit Data Mahasiswa</h2>

<form action="/update" method="POST">
@csrf

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<table>

<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"></td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jenis_kelamin" value="Laki-laki"
<?php if($data['jenis_kelamin']=="Laki-laki") echo "checked"; ?>>Laki-laki

<input type="radio" name="jenis_kelamin" value="Perempuan"
<?php if($data['jenis_kelamin']=="Perempuan") echo "checked"; ?>>Perempuan
</td>
</tr>

<tr>
<td>Alamat</td>
<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
</tr>

<tr>
<td>Sekolah Asal</td>
<td><input type="text" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>"></td>
</tr>

<tr>
<td>Nilai Matematika</td>
<td><input type="number" name="nilai_mtk" value="<?php echo $data['nilai_mtk']; ?>"></td>
</tr>

<tr>
<td>Nilai Bahasa Inggris</td>
<td><input type="number" name="nilai_binggris" value="<?php echo $data['nilai_binggris']; ?>"></td>
</tr>

<tr>
<td>Nilai Bahasa Indonesia</td>
<td><input type="number" name="nilai_bindo" value="<?php echo $data['nilai_bindo']; ?>"></td>
</tr>

<tr>
<td>Jurusan 1</td>
<td><input type="text" name="jurusan1" value="<?php echo $data['jurusan1']; ?>"></td>
</tr>

<tr>
<td>Jurusan 2</td>
<td><input type="text" name="jurusan2" value="<?php echo $data['jurusan2']; ?>"></td>
</tr>

<tr>
<td>Alasan</td>
<td><textarea name="alasan"><?php echo $data['alasan']; ?></textarea></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" value="Update">
</td>
</tr>

</table>

</form>

</body>
</html>