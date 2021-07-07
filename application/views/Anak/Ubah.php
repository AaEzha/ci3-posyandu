<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Perubahan Data Anak dan Balita<br>Khusus Warga Tamu</h2><hr class="mx-auto" width="50%"><BR>

<!-- Card -->
<div class="row row-cols-1 row-cols-md-2 g-2">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <!-- Text Form -->
        <h4 class="card-title text-center">Form Ubah Data Anak dan Balita</h4><hr>
        <!-- Form -->
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $anak['Id_Anak']; ?>">

        <!-- Field -->

        <!-- Nama -->
        <div class="mb-3">
        <label for="Nama_Anak">Nama Anak</label>
        <input type="text" name="Nama_Anak" class="form-control" id="Nama_Anak" value="<?= $anak['Nama_Anak']?>">
        <small  class="form-text text-danger"><?= form_error('Nama_Anak') ?></small>
        </div>

        <!-- JK -->
        <div class="mb-3 ">
        <label for="Jenis_Kelamin">Jenis Kelamin</label>
        <select class="form-select" id="Jenis_Kelamin" name="Jenis_Kelamin" aria-label="Default select example">
        <?php foreach( $Jenis_Kelamin as $jk ) : ?>
            <?php if( $jk == $anak['Jenis_Kelamin'] ) : ?>
                <option value="<?= $jk; ?>" selected> <?= $jk; ?> </option>
            <?php else : ?>
                <option value="<?= $jk; ?>" > <?= $jk; ?> </option>
            <?php endif; ?>
            <?php endforeach; ?>
        </select>
        </div>

        <!-- Tempat Lahir -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Tempat_Lahir">Tempat Lahir</label>
        <input type="text" name="Tempat_Lahir" class="form-control" id="Tempat_Lahir" value="<?= $anak['Tempat_Lahir']?>">
        <small  class="form-text text-danger"><?= form_error('Tempat_Lahir') ?></small>
        </div>
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Tanggal_Lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" value="<?= $anak['Tanggal_Lahir']?>">
        </div>
        </div>
        </div>

         <!-- Umur -->
         <!-- <div class="mb-3">
        <label for="Umur">Umur</label>
        <input type="text" name="Umur" class="form-control" id="Umur" value="<?= $anak['Umur']?>">
        <small  class="form-text text-danger"><?= form_error('Umur') ?></small>
        </div> -->

        <!-- Nama Ibu -->
        <div class="mb-3">
        <label for="Nama_Ibu">Nama Ibu</label>
        <input type="text" name="Nama_Ibu" class="form-control" id="Nama_Ibu" value="<?= $anak['Nama_Ibu']?>">
        <small  class="form-text text-danger"><?= form_error('Nama_Ibu') ?></small>
        </div>

        <!-- Nama Ayah -->
        <div class="mb-3">
        <label for="Nama_Ayah">Nama Ayah</label>
        <input type="text" name="Nama_Ayah" class="form-control" id="Nama_Ayah" value="<?= $anak['Nama_Ayah']?>">
        <small  class="form-text text-danger"><?= form_error('Nama_Ayah') ?></small>
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
      <!-- Alamat -->
      <div class="mb-3">
        <label for="Alamat">Alamat</label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?= $anak['Alamat']?>" >
        <small  class="form-text text-danger"><?= form_error('Alamat') ?></small>
        </div>

        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Rt">Rukun Warga (RW)</label>
        <input type="text" name="Rt" class="form-control" id="Rt" value="<?= $anak['Rt']?>">
        <small  class="form-text text-danger"><?= form_error('Rt') ?></small>
        </div>
        </div>

        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Rw">Rukun Warga (RW)</label>
        <input type="text" name="Rw" class="form-control" id="Rw" value="<?= $anak['Rw']?>">
        <small  class="form-text text-danger"><?= form_error('Rw') ?></small>
        </div>
        </div>
        </div>

         <!-- Desa -->
         <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Desa">Desa / Kelurahan</label>
        <input type="text" name="Desa" class="form-control" id="Desa" value="<?= $anak['Desa']?>">
        <small  class="form-text text-danger"><?= form_error('Desa') ?></small>
        </div>
        </div>

        <!-- Kecamatan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Kecamatan">Kecamatan</label>
        <input type="text" name="Kecamatan" class="form-control" id="Kecamatan" value="<?= $anak['Kecamatan']?>">
        <small  class="form-text text-danger"><?= form_error('Kecamatan') ?></small>
        </div>
        </div>
        </div>

        <!-- Kabupaten -->
        <div class="mb-3">
        <label for="Kabupaten">Kabupaten</label>
        <input type="text" name="Kabupaten" class="form-control" id="Kabupaten" value="<?= $anak['Kabupaten']?>">
        <small  class="form-text text-danger"><?= form_error('Kabupaten') ?></small>
        </div>

        <!-- Provinsi -->
        <div class="mb-3">
        <label for="Provinsi">Provinsi</label>
        <input type="text" name="Provinsi" class="form-control" id="Provinsi" value="<?= $anak['Provinsi']?>">
        <small  class="form-text text-danger"><?= form_error('Provinsi') ?></small>
        </div>

        <!-- Status Warga -->
        <div class="mb-3">
        <label for="Status_Warga">Status Warga</label>
        <input type="text" name="Status_Warga" class="form-control" id="Status_Warga" value="<?= $anak['Status_Warga']?>" readonly>
        </div>

        <!-- Button -->
        <br><br><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn " style="background-color:#B1C695" href="#" role="button">Kembali</a>
          <button type="submit" style="background-color:#5894C6" name="ubah" class="btn btn-primary"> Update Data </button>
</div>
      </div>
    </div>
  </div>
</div>
    </form>

<!-- Penutup Container -->
</div>
<br><br><br>
