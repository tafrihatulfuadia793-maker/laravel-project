<?php
include(app_path('koneksi_uas.php'));

$query = mysqli_query($conn, "SELECT * FROM pendaftaran_baru");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Pendaftaran Mahasiswa</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f5f6fa;
    padding:30px;
}

.container{
    width:98%;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

h2{
    text-align:center;
    color:#444;
    margin-bottom:25px;
}

.menu{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.kembali{
    background:#6c757d;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
}

.kembali:hover{
    background:#555;
}

.tambah{
    background:#28a745;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
}

.tambah:hover{
    background:#1f8b38;
}

.table-responsive{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:linear-gradient(to right,#ff7eb3,#ff758c);
    color:white;
    padding:12px;
    font-size:14px;
}

td{
    border:1px solid #ddd;
    padding:10px;
    text-align:center;
    font-size:14px;
}

tr:nth-child(even){
    background:#fafafa;
}

tr:hover{
    background:#fff0f6;
}

.edit{
    background:#007bff;
    color:white;
    text-decoration:none;
    padding:7px 12px;
    border-radius:5px;
    margin-right:5px;
}

.edit:hover{
    background:#0056b3;
}

.hapus{
    background:#dc3545;
    color:white;
    text-decoration:none;
    padding:7px 12px;
    border-radius:5px;
}

.hapus:hover{
    background:#b52b38;
}

.footer{
    text-align:center;
    margin-top:20px;
    color:#777;
    font-size:14px;
}

</style>

</head>

<body>

<div class="container">

<h2>Data Pendaftaran Mahasiswa Baru</h2>

<div class="menu">

<a href="/" class="kembali">
← Kembali
</a>

<a href="/create" class="tambah">
+ Tambah Mahasiswa Baru
</a>

</div>

<div class="table-responsive">

<table>

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Sekolah</th>
    <th>Jurusan 1</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while($data = mysqli_fetch_assoc($query)){
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['tempat_lahir']; ?></td>
<td><?php echo $data['tanggal_lahir']; ?></td>
<td><?php echo $data['jenis_kelamin']; ?></td>
<td><?php echo $data['sekolah_asal']; ?></td>
<td><?php echo $data['jurusan1']; ?></td>

<td>

<a class="edit"
href="/edit?id=<?php echo $data['id']; ?>">
Edit
</a>

<a class="hapus"
href="/hapus?id=<?php echo $data['id']; ?>"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<div class="footer">
© 2026 Toko Online Riha | Sistem Pendaftaran Mahasiswa
</div>

</div>

</body>
</html>