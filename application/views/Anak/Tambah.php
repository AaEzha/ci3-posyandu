<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Form Penambahan Data Anak dan Balita</h2><hr class="mx-auto" width="50%"><BR>

<!-- Card -->
<div class="row row-cols-1 row-cols-md-2 g-2">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <!-- Text Form -->
        <h4 class="card-title text-center">DATA DIRI ANAK</h4><hr class="mx-auto" width="50%"><br>
        <form action="" method="post">
        <!-- Form -->
        <input type="hidden" class="form-control" name="Id_Anak" value="Anak-<?php echo sprintf("%05s", $Id_Anak) ?>" readonly>

        <!-- Field -->
        <!-- NIK -->
        <div class="mb-3">
        <label for="NIK">NIK</label>
        <input type="text" name="NIK" class="form-control" id="NIK">
        <small  class="form-text text-danger"><?= form_error('NIK') ?></small>
        </div>

        <!-- Nama -->
        <div class="mb-3">
        <label for="Nama_Anak">Nama Anak</label>
        <input type="text" name="Nama_Anak" class="form-control" id="Nama_Anak">
        <small  class="form-text text-danger"><?= form_error('Nama_Anak') ?></small>
        </div>

        <!-- JK -->
        <div class="mb-3 ">
        <label for="Jenis_Kelamin">Jenis Kelamin</label>
        <select class="form-select" id="Jenis_Kelamin" name="Jenis_Kelamin" aria-label="Default select example">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
        </div>

        <!-- Nama -->
        <div class="mb-3">
        <label for="Anak_Ke">Anak Ke</label>
        <input type="text" name="Anak_Ke" class="form-control" id="Anak_Ke">
        <small  class="form-text text-danger"><?= form_error('Anak_ke') ?></small>
        </div>

        <!-- Tempat Lahir -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tempat_Lahir">Tempat Lahir</label>
        <input type="text" name="Tempat_Lahir" class="form-control" id="Tempat_Lahir">
        <small  class="form-text text-danger"><?= form_error('Tempat_Lahir') ?></small>
        </div>
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Tanggal_Lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir">
        <small  class="form-text text-danger"><?= form_error('Tanggal_Lahir') ?></small>
        </div>
        </div>
        </div>

        <!-- Nama Ibu -->
        <div class="mb-3">
        <label for="nik_ibu">NIK Ibu</label>
        <input type="text" name="nik_ibu" class="form-control" id="nik_ibu">
        <small  class="form-text text-danger"><?= form_error('nik_ibu') ?></small>
        </div>

        <!-- Nama Ayah -->
        <div class="mb-3">
        <label for="nik_ayah">NIK Ayah</label>
        <input type="text" name="nik_ayah" class="form-control" id="nik_ayah">
        <small  class="form-text text-danger"><?= form_error('nik_ayah') ?></small>
        </div>
        

      <!-- Penutup Div -->
      </div>
    </div>
  </div>

  <!--Card 2 -->
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
      
      <!-- Field 2 -->
      <h4 class="card-title text-center">DATA ALAMAT ANAK</h4><hr class="mx-auto" width="50%"><br>

      <!-- Alamat -->
      <div class="mb-3">
        <label for="Alamat">Alamat</label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="Jl. Orion" readonly>
        </div>

        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Rt">Rukun Tetangga (RT)</label>
        <select class="form-select" id="Rt" name="Rt" aria-label="Default select example">
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
        <input type="text" name="Rw" class="form-control" id="Rw" value="013" readonly>
        </div>
        </div>
        </div>

         <!-- Desa -->
         <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Desa">Desa / Kelurahan</label>
        <input type="text" name="Desa" class="form-control" id="Desa" value="Kertajaya" readonly>
        </div>
        </div>

        <!-- Kecamatan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Kecamatan">Kecamatan</label>
        <input type="text" name="Kecamatan" class="form-control" id="Kecamatan" value="Padalarang" readonly>
        </div>
        </div>
        </div>

        <!-- Kabupaten -->
        <div class="mb-3">
        <label for="Kabupaten">Kabupaten</label>
        <input type="text" name="Kabupaten" class="form-control" id="Kabupaten" value="Bandung Barat" readonly>
        </div>

        <!-- Provinsi -->
        <div class="mb-3">
        <label for="Provinsi">Provinsi</label>
        <input type="text" name="Provinsi" class="form-control" id="Provinsi" value="Jawa Barat" readonly>
        </div>

        <!-- Status Warga -->
        <div class="mb-3">
        <label for="Status_Warga">Status Warga</label>
        <input type="text" name="Status_Warga" class="form-control" id="Status_Warga" value="Warga Asli" readonly>
        </div>

        <!-- Button -->
        <br><br><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn " style="background-color:#B1C695" href="#" role="button">Kembali</a>
          <button type="submit" style="background-color:#5894C6" name="tambah" class="btn btn-primary"> Simpan Data </button>
        </div>


      </div>
    </div>
  </div>
</div>
    </form>

<!-- Penutup Container -->
</div>
<br><br><br>
