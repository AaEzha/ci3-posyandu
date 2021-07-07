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
        <title>Sub-PKKBD Puskesmas Mawar RW 13</title>

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav">
        <!-- 1 -->
        <li class="nav-item">
          <a class="nav-link active" style="color: #ffffff " aria-current="page" href="<?= base_url(); ?>Home">Halaman Utama</a>
        </li>
        <!-- 2 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Akseptor">Akseptor</a>
        </li>
        <!-- 3 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Lahir">Ibu Melahirkan</a>
        </li>
        <!-- 4 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>kawin">Perkawinan</a>
        </li>
        <!-- 5 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Kematian">Kematian</a>
        </li>
        <!-- 6 -->
        <!-- <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Datang">Penduduk Datang</a>
        </li> -->
        <!-- 7 -->
        <!-- <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Pindah">Penduduk Pindah</a>
        </li> -->
				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Data Penduduk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url(); ?>Penduduk">Master Penduduk</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>Datang">Penduduk Datang</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>Pindah">Penduduk Pindah</a></li>
          </ul>
        </li>
        <!-- 8 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan Kegiatan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanIbuHamil">Laporan Data Akseptor</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanPengecekan">Laporan Data Ibu Melahirkan</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanVitamin">Laporan Data Perkawinan</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanVitamin">Laporan Data Kematian</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanVitamin">Laporan Data Penduduk Datang</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>LaporanVitamin">Laporan Data Penduduk Pindah</a></li>
          </ul>
        </li>
				<!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opsi Akun
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Keluar Akun</a></li>
          </ul>
        </li> -->
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
