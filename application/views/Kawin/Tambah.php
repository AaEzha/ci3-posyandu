<!-- Container -->
<div class="container"><br>
<h2 class="text-center"> Form Penambahan Data Perkawinan</h2>
<hr class="mx-auto" width="35%"><BR>

<!-- Card 1 -->
<div class="card mx-auto" style="width: 50rem;">
<div class="card-body">
    <h5 class="card-title text-center"><strong>DATA SUAMI</strong></h5><hr class="mx-auto" width="20%">
    <!-- Sub Card 1 -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <h6 class="card-title text-center">DATA DIRI SUAMI</h6><hr class="mx-auto" width="40%">
        <!-- Form Pembuka -->
        <form action="" method="post">
        <input type="hidden" class="form-control form-control-sm"  name="Id_Kawin" value="KWN-<?php echo sprintf("%05s", $Id_Kawin) ?>" readonly>
        <!-- Nama Suami -->
        <div class="mb-3">
        <label for="Nama Suami" class="form-label">Nama</label>
        <input type="text" class="form-control form-control-sm" name="Nama_Suami">
        <small  class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
        </div>
        <!-- Tanggal Lahir -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tanggal Lahir">Tanggal Lahir</label>
        <input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Suami">
        </div>
        </div>
        <!-- Umur -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Umur Suami"> Umur</label>
        <input type="text" name="Umur_Suami" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Umur_Suami') ?></small>
        </div>
        </div>
        </div>
        <!-- Pendidikan -->
        <div class="mb-3 ">
        <label for="Pendidikan ">Pendidikan</label>
        <select class="form-select form-select-sm" name="Pendidikan_Suami">
        <option selected>Pilih Pendidikan</option>
        <option value="Tidak Sekolah">Tidak SekolaH</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA/SMK</option>
        <option value="D1/D3">D1/D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        </select>
        </div>
        <!-- Pekerjaan -->
        <div class="mb-3">
        <label for="Pekerjaan"> Pekerjaan</label>
        <input type="text" name="Pekerjaan_Suami" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Pekerjaan_Suami') ?></small>
        </div>
    <!-- Penutup Sub car 1 -->
    </div>
    </div>
    </div>
    <!-- Sub Card 2 -->
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <h6 class="card-title text-center">DATA ALAMAT SUAMI</h6><hr class="mx-auto" width="40%">
        <!-- Nama Suami -->
        <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control form-control-sm" name="Alamat_Suami">
        <small  class="form-text text-danger"><?= form_error('Alamat_Suami') ?></small>
        </div>
        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="RT ">RT</label>
        <input type="text" class="form-control form-control-sm" name="Rt_Suami">
        <small  class="form-text text-danger"><?= form_error('Rt_Suami') ?></small>
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="RW"> RW</label>
        <input type="text" name="Rw_Suami" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Rw_Suami') ?></small>
        </div>
        </div>
        </div>    
        <!-- Desa -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Desa ">Desa</label>
        <input type="text" class="form-control form-control-sm" name="Desa_Suami">
        <small  class="form-text text-danger"><?= form_error('Desa_Suami') ?></small>
        </div>
        </div>
        <!-- Pekerjaan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Kecamatan"> Kecamatan </label>
        <input type="text" name="Kecamatan_Suami" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Kecamatan_Suami') ?></small>
        </div>
        </div>
        </div>    
        <!-- Desa -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Kabupaten ">Kabupaten/Kota</label>
        <input type="text" class="form-control form-control-sm" name="Kabupaten_Suami">
        <small  class="form-text text-danger"><?= form_error('Kabupaten_Suami') ?></small>
        </div>
        </div>
        <!-- Pekerjaan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Provinsi"> Provinsi </label>
        <input type="text" name="Provinsi_Suami" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Provinsi_Suami') ?></small>
        </div>
        </div>
        </div>    
    <!-- Penutup Sub Card 1-->
    </div>
    </div>
    </div>
    <!-- Penutup Sub Card -->
    </div><br><hr>

    <h5 class="card-title text-center"><strong>DATA ISTRI</strong></h5><hr class="mx-auto" width="20%">
    <!-- Sub Card 1 -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <h6 class="card-title text-center">DATA DIRI ISTRI</h6><hr class="mx-auto" width="40%">
        <!-- Form Pembuka -->
        <form action="" method="post">
        <!-- Nama Suami -->
        <div class="mb-3">
        <label for="Nama Istri" class="form-label">Nama</label>
        <input type="text" class="form-control form-control-sm" name="Nama_Istri">
        <small  class="form-text text-danger"><?= form_error('Nama_istri') ?></small>
        </div>
        <!-- Tanggal Lahir -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tanggal Lahir">Tanggal Lahir</label>
        <input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Istri">
        </div>
        </div>
        <!-- Umur -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Umur Istri"> Umur</label>
        <input type="text" name="Umur_Istri" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
        </div>
        </div>
        </div>
        <!-- Pendidikan -->
        <div class="mb-3 ">
        <label for="Pendidikan ">Pendidikan</label>
        <select class="form-select form-select-sm" name="Pendidikan_Istri">
        <option selected>Pilih Pendidikan</option>
        <option value="Tidak Sekolah">Tidak Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA/SMK</option>
        <option value="D1/D3">D1/D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        </select>
        </div>
        <!-- Pekerjaan -->
        <div class="mb-3">
        <label for="Pekerjaan"> Pekerjaan</label>
        <input type="text" name="Pekerjaan_Istri" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Pekerjaan_Istri') ?></small>
        </div>
    <!-- Penutup Sub car 1 -->
    </div>
    </div>
    </div>
    <!-- Sub Card 2 -->
    <div class="col">
    <div class="card h-100">
    <div class="card-body">
    <h6 class="card-title text-center">DATA ALAMAT ISTRI</h6><hr class="mx-auto" width="40%">
        <!-- Nama Suami -->
        <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control form-control-sm" name="Alamat_Istri">
        <small  class="form-text text-danger"><?= form_error('Alamat_Istri') ?></small>
        </div>
        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="RT ">RT</label>
        <input type="text" class="form-control form-control-sm" name="Rt_Istri">
        <small  class="form-text text-danger"><?= form_error('Rt_Istri') ?></small>
        </div>
        </div>
        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="RW"> RW</label>
        <input type="text" name="Rw_Istri" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Rw_Istri') ?></small>
        </div>
        </div>
        </div>    
        <!-- Desa -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Desa ">Desa</label>
        <input type="text" class="form-control form-control-sm" name="Desa_Istri">
        <small  class="form-text text-danger"><?= form_error('Desa_Istri') ?></small>
        </div>
        </div>
        <!-- Pekerjaan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Kecamatan"> Kecamatan </label>
        <input type="text" name="Kecamatan_Istri" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Kecamatan_Istri') ?></small>
        </div>
        </div>
        </div>    
        <!-- Desa -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Kabupaten ">Kabupaten/Kota</label>
        <input type="text" class="form-control form-control-sm" name="Kabupaten_Istri">
        <small  class="form-text text-danger"><?= form_error('Kabupaten_Istri') ?></small>
        </div>
        </div>
        <!-- Pekerjaan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Provinsi"> Provinsi </label>
        <input type="text" name="Provinsi_Istri" class="form-control form-control-sm">
        <small  class="form-text text-danger"><?= form_error('Provinsi_Istri') ?></small>
        </div>
        </div>
        </div>    
    <!-- Penutup Sub Card 1-->
    </div>
    </div>
    </div>
    <!-- Penutup Sub Card -->
    </div><br><br>
     <!-- Button -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn md-end " style="background-color:#B1C695" href="<?= base_url(); ?>Akseptor" role="button">Kembali</a>
    <button type="submit" name="tambah" style="background-color:#5894C6"class="btn md-end text-white"> Simpan Data </button>
    </div>
<!-- Penutup Card 1 -->
</div>
</div><br>
</form>

<!--Penutup Div -->
</div>
<br><br><br><br>