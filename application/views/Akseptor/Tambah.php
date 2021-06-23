<!-- Container -->
<div class="container"><br>
<h2 class="text-center"> Form Penambahan Data Akseptor</h2>
<hr class="mx-auto" width="35%"><BR>
  <!-- Card -->
  <div class="card">
    <div class="card-body">
    <!-- Sub Card -->
    <div class="row row-cols-2 row-cols-md-3 g-4">
      <!-- Sub Sub Card 1 -->
      <div class="col">
      <div class="card h-100">
      <div class="card-body">
      <h5 class="card-title text-center"><strong>DATA DIRI SUAMI</strong></h5><hr class="mx-auto" width="40%">
        <!-- Form -->
        <form action="" method="post">
        <input type="hidden" class="form-control form-control-sm" id="Id_Akseptor" name="Id_Akseptor" value="AKS-<?php echo sprintf("%05s", $Id_Akseptor) ?>" readonly>
          <!-- Field -->
          <!-- Nama Suami -->
          <div class="mb-3">
          <label for="Nama_Suami">Nama Suami</label>
          <input type="text" name="Nama_Suami" class="form-control form-control-sm" id="Nama_Suami">
          <small  class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
          </div>
          <!-- Tanggal Lahir Suami -->
          <div class="mb-3">
          <label for="Tanggal_Lahir_Suami">Tanggal Lahir</label>
          <input type="date" name="Tanggal_Lahir_Suami" class="form-control form-control-sm" id="Tanggal_Lahir_Suami">
          </div><br><hr>
          <!-- Tanggal Lahir Suami -->
          <input type="hidden" name="Umur_Suami" class="form-control form-control-sm" id="Umur_Suami">
          <!-- Data Istri -->
          <h5 class="card-title text-center"><strong>DATA DIRI ISTRI</strong></h5><hr class="mx-auto" width="40%">
          <!-- Nama Istri -->
          <div class="mb-3">
          <label for="Nama_Istri">Nama Istri</label>
          <input type="text" name="Nama_Istri" class="form-control form-control-sm" id="Nama_Istri">
          <small  class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
          </div>
          <!-- Tanggal Lahir Istri -->
          <div class="mb-3">
          <label for="Tanggal_Lahir_Istri">Tanggal Lahir</label>
          <input type="date" name="Tanggal_Lahir_Istri" class="form-control form-control-sm" id="Tanggal_Lahir_Istri">
          </div>
          <!-- Tanggal Lahir Istri -->
          <input type="hidden" name="Umur_Istri" class="form-control form-control-sm" id="Umur_Istri">
          <!-- Penutup Div Sub Sub Card 1 -->
          </div>
        </div>
      </div>
      <!-- Sub Sub Card 2 -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
          <h5 class="card-title text-center"><strong>DATA ALAMAT</strong></h5><hr class="mx-auto" width="40%">
          <!-- Data Alamat -->
          <!-- Alamat -->
          <div class="mb-3">
          <label for="Alamat">Alamat</label>
          <input type="text" name="Alamat" class="form-control form-control-sm" id="Alamat" value="Jl. Orion" readonly>
          </div>
          <!-- RT -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Rt">RT</label>
          <select class="form-select form-select-sm" id="Rt" name="Rt"  id="Rt" aria-label="Default select example">
          <option selected>Pilih RT</option>
          <option value="1">001</option>
          <option value="2">002</option>
          <option value="3">003</option>
          <option value="4">004</option>
          <option value="5">005</option>
          </select>
          </div>
          </div>
          <!-- RW -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Rw">Rukun Warga (RW)</label>
          <input type="text" name="Rw" class="form-control form-control-sm" id="Rw" value="013" readonly>
          </div>
          </div>
          </div>
          <!-- Desa -->
          <div class="mb-3">
          <label for="Desa">Desa</label>
          <input type="text" name="Desa" class="form-control form-control-sm"  id="Desa" value="Kertajaya" readonly>
          </div>
          <!-- Kecamatan -->
          <div class="mb-3">
          <label for="Kecamatan">Kecamatan</label>
          <input type="text" name="Kecamatan" class="form-control form-control-sm"  id="Kecamatan"value="Padalarang" readonly>
          </div>
          <!-- Kabupaten -->
          <div class="mb-3">
          <label for="Kabupaten">Kabupaten</label>
          <input type="text" name="Kabupaten" class="form-control form-control-sm" id="Kabupaten"value="Bandung Barat" readonly>
          </div>
          <!-- Provinsi -->
          <div class="mb-3">
          <label for="Provinsi">Provinsi</label>
          <input type="text" name="Provinsi" class="form-control form-control-sm"  id="Provinsi"value="Jawa Barat" readonly>
          </div>
          <!-- Penutup Div Sub Sub Card 2-->
          </div>
        </div>
    </div>
    <!-- Sub Sub Card 3 -->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title text-center"><strong>DATA AKSEPTOR (KB)</strong></h5><hr class="mx-auto" width="40%">
          <!-- Data Akseptor -->
          <!-- Jumlah Anak Lk -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Jumlah_Anak_Lk">Jumlah Anak (LK)</label>
          <input type="text" name="Jumlah_Anak_Lk" class="form-control form-control-sm" id="Jumlah_Anak_Lk">
          <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Lk') ?></small>
          </div>
          </div>
          <!-- Jumlah Anak Pr -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Jumlah_Anak_Pr">Jumlah Anak (PR)</label>
          <input type="text" name="Jumlah_Anak_Pr" class="form-control form-control-sm" id="Jumlah_Anak_Pr">
          <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Pr') ?></small>
          </div>
          </div>
          </div>
          <!-- Umur Anak Terkecil -->
          <div class="mb-3">
          <label for="Umur_Anak_Kecil">Umur Anak Terkecil</label>
          <input type="text" name="Umur_Anak_Kecil" class="form-control form-control-sm"  id="Umur_Anak_Kecil">
          <small  class="form-text text-danger"><?= form_error('Umur_Anak_Kecil') ?></small>
          </div>
          <!-- Tanggal Pelkon -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Tanggal_Pelkon">Tanggal Pelkon</label>
          <input type="date" name="Tanggal_Pelkon" class="form-control form-control-sm" id="Tanggal_Pelkon">
          </div>
          </div>
          <!-- Tempat Pelkon -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Tempat_Pelkon">Tempat Pelkon</label>
          <input type="text" name="Tempat_Pelkon" class="form-control form-control-sm"  id="Tempat_Pelkon">
          <small  class="form-text text-danger"><?= form_error('Tempat_Pelkon') ?></small>
          </div>
          </div>
          </div>
          <!-- RT -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Metoda_Pelkon">Metoda Pelkon</label>
          <select class="form-select form-select-sm" id="Rt" name="Metoda_Pelkon"  id="Metoda_pelkon" aria-label="Default select example">
          <option selected>--Pilih Metoda--</option>
          <option value="IUD">IUD</option>
          <option value="MOP">MOP</option>
          <option value="MOW">MOW</option>
          <option value="KONDOM">KONDOM</option>
          <option value="IMPLAN">IMPLANT</option>
          <option value="SUNTIK">SUNTIK</option>
          <option value="PIL">PIL</option>
          </select>
          </div>
          </div>
          <!-- RW -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Do_Dari">DO Dari</label>
          <select class="form-select form-select-sm"  name="Do_Dari"  id="Do_Dari" aria-label="Default select example">
          <option selected>--Pilih DO--</option>
          <option value="-">-</option>
          <option value="IUD">IUD</option>
          <option value="MOP">MOP</option>
          <option value="MOW">MOW</option>
          <option value="KONDOM">KONDOM</option>
          <option value="IMPLAN">IMPLANT</option>
          <option value="SUNTIK">SUNTIK</option>
          <option value="PIL">PIL</option>
          </select>
          </div>
          </div>
          </div>
          <!-- Button -->
          <br><br><br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Akseptor" role="button">Kembali</a>
            <button type="submit" name="tambah" style="background-color:#5894C6"class="btn btn-primary"> Simpan Data </button>
          </div>
          <!-- Penutup Sub Sub Card 3 -->
        </div>
      </div>
    </div>
    <!-- Penutup Sub Card -->
    </div>
          </form>
<!-- Penutup Card -->
    </div>
  </div>
<!--Penutup Div -->
</div>
<br><br><br><br>