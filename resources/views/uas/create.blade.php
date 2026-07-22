<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>

<h2>Form Tambah Data Mahasiswa</h2>

<form action="/simpan" method="POST">

    @csrf

    <table>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" required></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" required></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" required></textarea></td>
        </tr>

        <tr>
            <td>Sekolah Asal</td>
            <td><input type="text" name="sekolah_asal" required></td>
        </tr>

        <tr>
            <td>Nilai Matematika</td>
            <td><input type="number" name="nilai_mtk" min="0" max="100" required></td>
        </tr>

        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td><input type="number" name="nilai_binggris" min="0" max="100" required></td>
        </tr>

        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td><input type="number" name="nilai_bindo" min="0" max="100" required></td>
        </tr>

        <tr>
            <td>Jurusan 1</td>
            <td>
                <select name="jurusan1" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Jurusan 2</td>
            <td>
                <select name="jurusan2" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Alasan</td>
            <td>
                <textarea name="alasan" required></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" value="Simpan Data">
            </td>
        </tr>

    </table>

</form>

</body>
</html>