<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400&display=swap" rel="stylesheet">

        <!-- Judul -->
        <title>Hello, world!</title>

    <!-- Head -->
    </head>
    <!------------------------------------------------------------------------------------------------------------->
    <!-- Isi Body -->
    <body style="background-color:#fcfffc" >

    <!-- Div Head -->
    <div class="head" style="background-color: #C0D8D0;">
    <br>
    <h3 class="text-center" > Sistem Informasi Posyandu Mawar Rw. 13 <br> Desa Kertajaya </h3>
    <br>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light text-white" style="background-color: #373E43">
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- 1 -->
        <li class="nav-item">
          <a class="nav-link active" style="color: #ffffff " aria-current="page" href="<?= base_url(); ?>Home">Halaman Utama</a>
        </li>
        <!-- 2 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Anak">Ibu Hamil</a>
        </li>
        <!-- 3 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Timbangan">Pengecekan</a>
        </li>
        <!-- 4 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vitamin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url(); ?>VaksinAnak">Pemberian Vaksin</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>Vaksin">Data Vaksin</a></li>
          </ul>
        </li>
        <!-- 6 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan Kegiatan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanIbuHamil">Laporan Data Ibu Hamil</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanPengecekan">Laporan Data Imunisasi</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanVitamin">Laporan Data Vitamin</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- css-->
<style>
.head {
    font-family: 'Lora', serif;
}
.nav-item {
  font-family: 'Quicksand', sans-serif;
}
body{
    font-family: 'Zilla Slab', serif;
}
</style>