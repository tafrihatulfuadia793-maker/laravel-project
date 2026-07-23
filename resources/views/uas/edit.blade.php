<?php

use Illuminate\Support\Facades\DB;

$id = request('id');

$data = DB::table('pendaftaran_baru')
            ->where('id', $id)
            ->first();

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

<input type="hidden" name="id" value="{{ $data->id }}">

<table>

<tr>
<td>Nama</td>
<td>
<input type="text" name="nama" value="{{ $data->nama }}">
</td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td>
<input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}">
</td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td>
<input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
</td>
</tr>

<tr>
<td>Jenis Kelamin</td>
<td>

<input
type="radio"
name="jenis_kelamin"
value="Laki-laki"
{{ $data->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
Laki-laki

<input
type="radio"
name="jenis_kelamin"
value="Perempuan"
{{ $data->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
Perempuan

</td>
</tr>

<tr>
<td>Alamat</td>
<td>
<textarea name="alamat">{{ $data->alamat }}</textarea>
</td>
</tr>

<tr>
<td>Sekolah Asal</td>
<td>
<input
type="text"
name="sekolah_asal"
value="{{ $data->sekolah_asal }}">
</td>
</tr>

<tr>
<td>Nilai Matematika</td>
<td>
<input
type="number"
name="nilai_mtk"
value="{{ $data->nilai_mtk }}">
</td>
</tr>

<tr>
<td>Nilai Bahasa Inggris</td>
<td>
<input
type="number"
name="nilai_binggris"
value="{{ $data->nilai_binggris }}">
</td>
</tr>

<tr>
<td>Nilai Bahasa Indonesia</td>
<td>
<input
type="number"
name="nilai_bindo"
value="{{ $data->nilai_bindo }}">
</td>
</tr>

<tr>
<td>Jurusan 1</td>
<td>
<input
type="text"
name="jurusan1"
value="{{ $data->jurusan1 }}">
</td>
</tr>

<tr>
<td>Jurusan 2</td>
<td>
<input
type="text"
name="jurusan2"
value="{{ $data->jurusan2 }}">
</td>
</tr>

<tr>
<td>Alasan</td>
<td>
<textarea name="alasan">{{ $data->alasan }}</textarea>
</td>
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