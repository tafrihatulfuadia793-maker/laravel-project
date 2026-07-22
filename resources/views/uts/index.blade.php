<!DOCTYPE html>
<html>
<head>
    <title>Toko Online Riha</title>
    
    <meta name="Viewport"
    content=""width=device-width,
    initial-scale="1.0">

    <script>
        function tampilkan(id) {
            let semua = document.querySelectorAll(".konten");
            semua.forEach(x => x.style.display = "none");
            document.getElementById(id).style.display = "block";
        }
    </script>


</head>

<body style="margin:0; font-family: Arial, sans-serif; background:#f9f9f9;" onload="tampilkan('beranda')">

<!-- HEADER -->
<div style="background: linear-gradient(to right, #aba6aa, #dfdcde); text-align:center; padding:25px; color:rgb(33, 29, 29);">
    <h1 style="border:5px double rgb(255, 115, 220); display:inline-block; padding:10px;">
        TOKO ONLINE RIHA
    </h1>
    <p>✨ Belanja Mudah • Aman • Terpercaya ✨</p>
</div>

<div style="display:flex; min-height:100vh;">

<!-- MENU -->
<div style="width:200px; background: linear-gradient(#d4c3ca,#fea3d0); padding:15px;">
    <h2>Menu</h2>
    <hr>
    <p><a href="#" onclick="tampilkan('beranda')">Beranda</a></p>
    <p><a href="#" onclick="tampilkan('profil')">Profil</a></p>
    <p><a href="#" onclick="tampilkan('kontak')">Kontak</a></p>
    <p><a href="#" onclick="tampilkan('buku')">Kategori Buku</a></p>
    <p><a href="#" onclick="tampilkan('fashion')">Kategori Fashion</a></p>
    <p><a href="#" onclick="tampilkan('gaming')">Kategori Gaming</a></p>

    <!-- TAMBAHAN -->
    <p><a href="#" onclick="tampilkan('formulir')">Formulir</a></p>
</div>

<!-- KONTEN -->
<div style="flex:1; padding:20px; width:100%;">

<!-- BERANDA -->
<div id="beranda" class="konten" style="background: linear-gradient(#fbc2eb,#a6c1ee); padding:20px; border-radius:10px;">
    <h2>Selamat Datang 👋</h2>
    <p>
        Selamat datang di <b>Toko Online Riha</b>, solusi belanja online yang praktis, cepat, dan terpercaya.
        Kami hadir untuk memenuhi kebutuhan Anda dengan berbagai produk pilihan mulai dari buku edukatif,
        fashion kekinian, hingga perlengkapan gaming modern.
    </p>

    <p>
        Dengan harga yang terjangkau dan kualitas terbaik, kami berkomitmen memberikan pengalaman belanja
        yang nyaman dan menyenangkan untuk Anda.
    </p>

    <p style="margin-top:15px;">
        🚚 Pengiriman Cepat <br>
        💰 Harga Bersahabat <br>
        🔒 Transaksi Aman <br>
        ⭐ Produk Berkualitas
    </p>
</div>

<!-- PROFIL -->
<div id="profil" class="konten" style="background: linear-gradient(#ffdde1,#ee9ca7); padding:20px; border-radius:10px; color:#333;">
    <h2>Profil Toko</h2>

    <p>
        <b>Toko Online Riha</b> adalah platform belanja digital yang berdiri sejak tahun 2026.
        Kami berfokus untuk menyediakan produk berkualitas dengan pelayanan terbaik demi kepuasan pelanggan.
    </p>

    <p>
        Kami percaya bahwa kepercayaan pelanggan adalah hal utama, поэтому setiap produk yang kami tawarkan
        telah melalui proses seleksi agar memberikan kualitas terbaik untuk Anda.
    </p>

    <h3>Visi</h3>
    <p>
        Menjadi toko online terpercaya yang selalu menghadirkan produk berkualitas dan pelayanan terbaik.
    </p>

    <h3>Misi</h3>
    <ul>
        <li>Menyediakan produk berkualitas dengan harga terjangkau</li>
        <li>Memberikan pelayanan cepat, ramah, dan responsif</li>
        <li>Menjamin keamanan dan kenyamanan dalam setiap transaksi</li>
    </ul>
</div>

<!-- KONTAK -->
<div id="kontak" class="konten" style="background: linear-gradient(#fddb92,#d1fdff); padding:20px; border-radius:10px;">
    <h2>Hubungi Kami 📞</h2>

    <p>
        Punya pertanyaan, butuh bantuan, atau ingin melakukan pemesanan?
        Tim kami siap membantu Anda dengan pelayanan terbaik dan respon cepat.
    </p>

    <p><b>📱 WhatsApp:</b> 0812-xxxx-xxxx</p>
    <p><b>📧 Email:</b> admin@riha-store.com</p>

    <p style="margin-top:10px;">
        ⏰ Jam Operasional: 08.00 - 20.00 WIB <br>
        💬 Respon cepat & ramah setiap hari
    </p>

    <p style="margin-top:15px;">
        📍 Jl. Raya Pemrograman No.10, Indonesia
    </p>
</div>

<!-- BUKU -->
<div id="buku" class="konten" style="background: linear-gradient(#e0c3fc,#8ec5fc); padding:20px; border-radius:10px;">
    <h2 style="text-align:center;">Kategori Buku 📚</h2>

    <div style="display:flex; gap:20px; justify-content:center;">
        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Buku Pemrograman</b></p>
            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=200" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 80.000</p>
            <p style="font-size:13px;">
                Belajar coding dari dasar hingga mahir dengan materi lengkap dan mudah dipahami.
            </p>
        </div>

        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Buku Novel</b></p>
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=200" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 65.000</p>
            <p style="font-size:13px;">
                Novel inspiratif dengan cerita menarik dan penuh makna kehidupan.
            </p>
        </div>
    </div>
</div>

<!-- FASHION -->
<div id="fashion" class="konten" style="background: linear-gradient(#fbc2eb,#a6c1ee); padding:20px; border-radius:10px;">
    <h2 style="text-align:center;">Kategori Fashion 👕</h2>

    <div style="display:flex; gap:20px; justify-content:center;">
        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Kaos Polos</b></p>
            <img src="https://pngimg.com/uploads/tshirt/tshirt_PNG5434.png" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 50.000</p>
            <p style="font-size:13px;">
                Kaos nyaman, adem, cocok untuk aktivitas sehari-hari.
            </p>
        </div>

        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Jaket Keren</b></p>
            <img src="https://pngimg.com/uploads/jacket/jacket_PNG8056.png" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 120.000</p>
            <p style="font-size:13px;">
                Jaket stylish dan hangat untuk tampilan modern.
            </p>
        </div>
    </div>
</div>

<!-- GAMING -->
<div id="gaming" class="konten" style="background: linear-gradient(#cfd9df,#e2ebf0); padding:20px; border-radius:10px;">
    <h2 style="text-align:center;">Kategori Gaming 🎮</h2>

    <div style="display:flex; gap:20px; justify-content:center;">
        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Mouse Gaming</b></p>
            <img src="https://pngimg.com/uploads/computer_mouse/computer_mouse_PNG7676.png" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 250.000</p>
            <p style="font-size:13px;">
                Mouse presisi tinggi untuk performa gaming maksimal.
            </p>
        </div>

        <div style="background:white; padding:15px; border-radius:10px; width:200px; text-align:center;">
            <p><b>Keyboard Mech</b></p>
            <img src="https://pngimg.com/uploads/keyboard/keyboard_PNG5856.png" width="150">
            <p style="background:orange; color:white; padding:5px; border-radius:5px;">Rp 450.000</p>
            <p style="font-size:13px;">
                Keyboard responsif untuk pengalaman gaming terbaik.
            </p>
        </div>
    </div>
</div>

<!-- FORMULIR -->
<div id="formulir" class="konten" style="background:white; padding:20px; border-radius:10px;">

    <h2 style="text-align:center;">Formulir Pendaftaran UNIROW</h2>

    <form action="/proses" method="POST">
     @csrf

        <table width="100%">

            <tr>
                <td width="35%">Nama</td>
                <td width="5%">:</td>
                <td>
                    <input type="text" name="nama" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat_lahir" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_lahir" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" rows="3" style="width:100%;"></textarea>
                </td>
            </tr>

            <tr>
                <td>Sekolah Asal</td>
                <td>:</td>
                <td>
                    <input type="radio" name="sekolah" value="SMA"> SMA
                    <input type="radio" name="sekolah" value="MA"> MA
                    <input type="radio" name="sekolah" value="SMK"> SMK
                </td>
            </tr>

            <tr>
                <td colspan="3"><b>Nilai UAN</b></td>
            </tr>

            <tr>
                <td>Matematika</td>
                <td>:</td>
                <td>
                    <input type="text" name="mtk" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td>
                    <input type="text" name="bing" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td>
                    <input type="text" name="bindo" style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td colspan="3"><b>Jurusan Dipilih</b></td>
            </tr>

            <tr>
                <td>Pilihan 1</td>
                <td>:</td>
                <td>

                    <select name="jur1" style="width:100%; padding:8px;">
                        <option>TEKNIK INFORMATIKA</option>
                        <option>SISTEM INFORMASI</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>Pilihan 2</td>
                <td>:</td>
                <td>

                    <select name="jur2" style="width:100%; padding:8px;">
                        <option>TEKNIK INFORMATIKA</option>
                        <option>SISTEM INFORMASI</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>Alasan Masuk</td>
                <td>:</td>
                <td>

                    <textarea name="alasan" rows="5" style="width:100%;"></textarea>

                </td>
            </tr>

            <tr>
                <td colspan="3" align="right">

                    <button type="submit"
style="padding:10px 20px; background:blue; color:white; border:none; border-radius:5px; cursor:pointer;">
Daftar
</button>

                    <input 
                        type="reset"
                        value="Cancel"
                        style="padding:10px 20px; background:red; color:white; border:none; border-radius:5px;"
                    >

                </td>
            </tr>

        </table>

    </form>

</div>

<hr>
<p style="text-align:center;">&copy; 2026 Toko Online Riha</p>

</div>
</div>

</body>
</html>