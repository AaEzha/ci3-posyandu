<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">

        <!-- Judul -->
        <title>Posyandu Mawar RW 13</title>

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
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Visi">Visi & Misi</a>
        </li>
        <!-- 3 -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url(); ?>Profil">Profil Pengguna</a>
        </li>
				<?php if(! isset($this->session->username)) { ?>
				<!-- Login -->
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff " href="<?= base_url('auth'); ?>">Login</a>
        </li>
				<?php }else{ ?>
        <!-- 4 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #ffffff " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opsi Akun
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Keluar Akun</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>Register">Tambahkan Akun</a></li>
          </ul>
        </li>
				<?php } ?>
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
