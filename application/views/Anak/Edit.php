<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Peubahan Data Anak dan Balita<br>Khusus Warga Asli RW.013</h2><hr class="mx-auto" width="50%"><BR>

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
        <!-- NIK -->
        <div class="mb-3">
        <label for="NIK">NIK</label> 
        <input type="text" name="NIK" class="form-control" id="NIK" value="<?= $anak['NIK']?>" readonly>
        </div>


        <!-- Nama -->
        <div class="mb-3">
        <label for="Nama_Anak">Nama Anak</label>
        <input type="text" name="Nama_Anak" class="form-control" id="Nama_Anak" value="<?= $anak['Nama_Anak']?>">
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
        </div> -->

        <!-- Nama -->
        <div class="mb-3">
        <label for="Anak_Ke">Anak Ke</label>
        <input type="text" name="Anak_Ke" class="form-control" id="Anak_Ke" value="<?= $anak['Anak_Ke']?>">
        <small  class="form-text text-danger"><?= form_error('Anak_Ke') ?></small>
        </div>

        <!-- Nama Ibu -->
        <div class="mb-3">
        <label for="nik_ibu">NIK Ibu</label>
        <input type="text" name="nik_ibu" class="form-control" id="nik_ibu" value="<?= $anak['nik_ibu']?>">
        </div>

        <!-- Nama Ayah -->
        <div class="mb-3">
        <label for="nik_ayah">NIK Ayah</label>
        <input type="text" name="nik_ayah" class="form-control" id="nik_ayah" value="<?= $anak['nik_ayah']?>">
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
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?= $anak['Alamat']?>" readonly >
        </div>

        <!-- RT -->
        <div class="row">
        <div class="col-md-6">
        <div class="mb-3 ">
        <label for="Rt">Rukun Tetangga (RT)</label>
        <select class="form-select" id="Rt" name="Rt" aria-label="Default select example" readonly>
        <?php foreach( $RT as $Rt ) : ?>
            <?php if( $Rt == $anak['Rt'] ) : ?>
                <option value="<?= $Rt; ?>" selected> <?= $Rt; ?> </option>
            <?php else : ?>
                <option value="<?= $Rt; ?>" > <?= $Rt; ?> </option>
            <?php endif; ?>
            <?php endforeach; ?>
        </select>
        </div>
        </div>

        <!-- RW -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Rw">Rukun Warga (RW)</label>
        <input type="text" name="Rw" class="form-control" id="Rw" value="<?= $anak['Rw']?>" readonly>
        </div>
        </div>
        </div>

         <!-- Desa -->
         <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Desa">Desa / Kelurahan</label>
        <input type="text" name="Desa" class="form-control" id="Desa" value="<?= $anak['Desa']?>" readonly>
        </div>
        </div>

        <!-- Kecamatan -->
        <div class="col-md-6">
        <div class="mb-3">
        <label for="Kecamatan">Kecamatan</label>
        <input type="text" name="Kecamatan" class="form-control" id="Kecamatan" value="<?= $anak['Kecamatan']?>" readonly>
        </div>
        </div>
        </div>

        <!-- Kabupaten -->
        <div class="mb-3">
        <label for="Kabupaten">Kabupaten</label>
        <input type="text" name="Kabupaten" class="form-control" id="Kabupaten" value="<?= $anak['Kabupaten']?>" readonly>
        </div>

        <!-- Provinsi -->
        <div class="mb-3">
        <label for="Provinsi">Provinsi</label>
        <input type="text" name="Provinsi" class="form-control" id="Provinsi" value="<?= $anak['Provinsi']?>" readonly>
        </div>

        <!-- Status Warga -->
        <div class="mb-3">
        <label for="Status_Warga">Status Warga</label>
        <input type="text" name="Status_Warga" class="form-control" id="Status_Warga" value="<?= $anak['Status_Warga']?>" readonly>
        </div>

        <!-- Button -->
        <br><br><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn " style="background-color:#B1C695" href="<?=base_url('anak');?>" role="button">Kembali</a>
          <button type="submit" style="background-color:#5894C6" name="edit" class="btn btn-primary"> Update Data </button>
</div>
      </div>
    </div>
  </div>
</div>
    </form>

<!-- Penutup Container -->
</div>
<br><br><br>
