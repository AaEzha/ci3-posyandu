<!-- Container -->
<div class="container"><br>
<h2 class="text-center"> Form Penambahan Data Penduduk Pindah</h2>
<hr class="mx-auto" width="50%"><BR>
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
        <input type="hidden" class="form-control form-control-sm"  name="Id_Pindah" value="PDH-<?php echo sprintf("%05s", $Id_Pindah) ?>" readonly>
          <!-- Field -->
          <!-- Nama Suami -->
          <div class="mb-3">
          <label for="Nama_KK_Pindah">Nama Kepala Keluarga</label>
          <input type="text" name="Nama_KK_Pindah" class="form-control form-control-sm" >
          <small  class="form-text text-danger"><?= form_error('Nama_KK_Pindah') ?></small>
          </div>
          <!-- Tanggal Lahir KK -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tanggal_Lahir_KK_Pindah">Tanggal Lahir</label>
        <input type="date" name="Tanggal_Lahir_KK_Pindah" class="form-control form-control-sm" >
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Umur_KK_Pindah">Umur</label>
        <input type="text" name="Umur_KK_Pindah" class="form-control form-control-sm" >
        <small  class="form-text text-danger"><?= form_error('Umur_KK_Pindah') ?></small>
        </div>
        </div>
        </div>
          <br><hr>
          <!-- Data Istri -->
          <h5 class="card-title text-center"><strong>DATA DIRI ISTRI</strong></h5><hr class="mx-auto" width="40%">
          <!-- Nama Istri -->
          <div class="mb-3">
          <label for="Nama_Istri_Pindah">Nama Istri</label>
          <input type="text" name="Nama_Istri_Pindah" class="form-control form-control-sm">
          <small  class="form-text text-danger"><?= form_error('Nama_Istri_Pindah') ?></small>
          </div>
         <!-- Tanggal Lahir KK -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tgl Istri_Pindah">Tanggal Lahir</label>
        <input type="date" name="Tanggal_Lahir_Istri_Pindah" class="form-control form-control-sm" >
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Umur_Istri">Umur</label>
        <input type="text" name="Umur_Istri_Pindah" class="form-control form-control-sm" >
        <small  class="form-text text-danger"><?= form_error('Umur_Istri_Pindah') ?></small>
        </div>
        </div>
        </div>
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
          <label for="Alamat_Datang">Alamat</label>
          <input type="text" name="Alamat_Pindah" class="form-control form-control-sm" id="Alamat" value="Jl. Orion" readonly>
          </div>
          <!-- RT -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Rt_Datang">RT</label>
          <select class="form-select form-select-sm" id="Rt" name="Rt_Pindah"  id="Rt" aria-label="Default select example">
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
          <label for="Rw_Datang">RW</label>
          <input type="text" name="Rw_Pindah" class="form-control form-control-sm" value="013" readonly>
          </div>
          </div>
          </div>
          <!-- Desa -->
          <div class="mb-3">
          <label for="Desa_Datang">Desa</label>
          <input type="text" name="Desa_Pindah" class="form-control form-control-sm"  id="Desa" value="Kertajaya" readonly>
          </div>
          <!-- Kecamatan -->
          <div class="mb-3">
          <label for="Kecamatan">Kecamatan</label>
          <input type="text" name="Kecamatan_Pindah" class="form-control form-control-sm"  id="Kecamatan"value="Padalarang" readonly>
          </div>
          <!-- Kabupaten -->
          <div class="mb-3">
          <label for="Kabupaten">Kabupaten</label>
          <input type="text" name="Kabupaten_Pindah" class="form-control form-control-sm" id="Kabupaten"value="Bandung Barat" readonly>
          </div>
          <!-- Provinsi -->
          <div class="mb-3">
          <label for="Provinsi">Provinsi</label>
          <input type="text" name="Provinsi_Pindah" class="form-control form-control-sm"  id="Provinsi"value="Jawa Barat" readonly>
          </div>
          <!-- Penutup Div Sub Sub Card 2-->
          </div>
        </div>
    </div>
    <!-- Sub Sub Card 3 -->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title text-center"><strong>DATA KELUARGA</strong></h5><hr class="mx-auto" width="40%">
          <!-- Data Aanak -->
          <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Jumlah_Jiwa_Lk">Jumlah Jiwa LK</label>
        <input type="text" name="Jumlah_Jiwa_Lk_Pindah" class="form-control" id="Rw">
        <small  class="form-text text-danger"><?= form_error('Jumlah_Jiwa_Lk_Pindah') ?></small>
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Jumlah_Jiwa_Pr">Jumlah Jiwa PR</label>
        <input type="text" name="Jumlah_Jiwa_Pr_Pindah" class="form-control" >
        <small  class="form-text text-danger"><?= form_error('Jumlah_Jiwa_Pr_Pindah') ?></small>
        </div>
        </div>
        </div>
        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Jumlah_Anak_Lk">Jumlah Anak LK</label>
        <input type="text" name="Jumlah_Anak_Lk_Pindah" class="form-control" id="Rw">
        <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Lk_Pindah') ?></small>
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Jumlah_Anak_Pr">Jumlah Anak PR</label>
        <input type="text" name="Jumlah_Anak_Pr_Pindah" class="form-control" >
        <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Pr_Pindah') ?></small>
        </div>
        </div>
        </div>
        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Kb">KB</label>
          <select class="form-select form-select-sm" id="Rt" name="Kb"  id="Rt" aria-label="Default select example">
          <option selected>Pilih</option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
          </select>
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Ks">KS</label>
          <select class="form-select form-select-sm" id="Rt" name="Ks"  id="Rt" aria-label="Default select example">
          <option selected>Pilih</option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
          </select>
        </div>
        </div>
        </div>
          <!-- Button -->
          <br><br><br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Pindah" role="button">Kembali</a>
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