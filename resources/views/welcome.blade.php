<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Laravel UTS UAS</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#eef5ff;
}

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:250px;
    height:100%;
    background:linear-gradient(180deg,#2563eb,#06b6d4);
    color:white;
    box-shadow:5px 0 15px rgba(0,0,0,.2);
}

.sidebar h2{
    text-align:center;
    padding:30px 0;
    font-size:24px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:18px 30px;
    font-size:20px;
    transition:.3s;
}

.sidebar a:hover{
    background:rgba(255,255,255,.2);
    padding-left:40px;
}

.main{
    margin-left:250px;
    padding:30px;
}

.header{
    background:linear-gradient(to right,#ff5ec4,#7c5cff,#00bfff);
    color:white;
    padding:22px;
    text-align:center;
    border-radius:15px;
    font-size:22px;
    font-weight:bold;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.profil{
    width:550px;
    margin:20px auto;
    background:white;
    border-radius:20px;
    padding:35px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.profil img{
    width:120px;
    height:120px;
    border-radius:50%;
    border:5px solid #2196f3;
    object-fit:cover;
}

.profil h2{
    margin-top:15px;
    font-size:32px;
    color:#222;
}

.biodata{
    width:400px;
    margin:20px auto;
}

.item{
    display:flex;
    margin:12px 0;
    font-size:18px;
}

.judul{
    width:140px;
    font-weight:bold;
}

.titik{
    width:20px;
}

.menu{
    display:flex;
    justify-content:center;
    gap:35px;
    margin-top:40px;
}

.card{
    width:250px;
    background:pink;
    border-radius:15px;
    padding:25px;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card h3{
    font-size:30px;
    margin-bottom:15px;
}

.card p{
    color:#666;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    background:#222;
    color:white;
    text-decoration:none;
    padding:12px 35px;
    border-radius:8px;
    transition:.3s;
}

.btn:hover{
    background:#2196f3;
}

</style>
</head>

<body>

<div class="sidebar">

<a href="#">🏠 Dashboard</a>
<a href="/uts">📚 UTS</a>
<a href="/uas">📚 UAS</a>

</div>

<div class="main">

<div class="header">
<h1>UAS PEMROGRAMAN WEB (087)</h1>
</div>

<div class="profil">

<img src="{{ asset('images/poto.jpeg') }}" alt="Foto Profil">

<h2>Tafrihatul Fuadia</h2>

<div class="biodata">

<div class="item">
<span class="judul">NPM</span>
<span class="titik">:</span>
<span>1412240087</span>
</div>

<div class="item">
<span class="judul">Kelas</span>
<span class="titik">:</span>
<span>B / 2024</span>
</div>

<div class="item">
<span class="judul">Program Studi</span>
<span class="titik">:</span>
<span>Teknik Informatika</span>
</div>

<div class="item">
<span class="judul">Universitas</span>
<span class="titik">:</span>
<span>Universitas PGRI Ronggolawe Tuban</span>
</div>

</div>

<div class="menu">

<div class="card">

<h3>📚 UTS</h3>

<p>Halaman Project UTS</p>

<a href="/uts" class="btn">Buka</a>

</div>

<div class="card">

<h3>📚 UAS</h3>

<p>Halaman Project UAS</p>

<a href="/uas" class="btn">Buka</a>

</div>

</div>

</div>

</div>

</body>
</html>