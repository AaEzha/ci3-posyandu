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
        <input type="hidden" class="form-control form-control-sm" id="Id_Akseptor" name="Id_Akseptor" value="<?= $Akseptor['Id_Akseptor']?>" readonly>
          <!-- Field -->
          <!-- Nama Suami -->
          <div class="mb-3">
          <label for="Nama_Suami">Nama Suami</label>
          <input type="text" name="Nama_Suami" class="form-control form-control-sm" id="Nama_Suami" value="<?= $Akseptor['Nama_Suami']?>">
          <small  class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
          </div>
          <!-- Tanggal Pelkon -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Tanggal_Lahir_Suami">Tanggal Lahir</label>
          <input type="date" name="Tanggal_Lahir_Suami" class="form-control form-control-sm" value="<?= $Akseptor['Tanggal_Lahir_Suami']?>">
          </div>
          </div>
          <!-- Tempat Pelkon -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Umur_Suami">Tempat Pelkon</label>
          <input type="text" name="Umur_Suami" class="form-control form-control-sm"  value="<?= $Akseptor['Umur_Suami']?>">
          <small  class="form-text text-danger"><?= form_error('Umur_Suami') ?></small>
          </div>
          </div>
          </div><br><hr>
          <!-- Data Istri -->
          <h5 class="card-title text-center"><strong>DATA DIRI ISTRI</strong></h5><hr class="mx-auto" width="40%">
          <!-- Nama Istri -->
          <div class="mb-3">
          <label for="Nama_Istri">Nama Istri</label>
          <input type="text" name="Nama_Istri" class="form-control form-control-sm" id="Nama_Istri" value="<?= $Akseptor['Nama_Istri']?>">
          <small  class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
          </div>
          <!-- Tanggal Pelkon -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Tanggal_Lahir_Istri">Tanggal Lahir</label>
          <input type="date" name="Tanggal_Lahir_Istri" class="form-control form-control-sm" value="<?= $Akseptor['Tanggal_Lahir_Istri']?>">
          </div>
          </div>
          <!-- Tempat Pelkon -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Umur_Istri">Umur Istri</label>
          <input type="text" name="Umur_Istri" class="form-control form-control-sm"  value="<?= $Akseptor['Umur_Istri']?>">
          <small  class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
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
          <label for="Alamat">Alamat</label>
          <input type="text" name="Alamat" class="form-control form-control-sm" id="Alamat" value="<?= $Akseptor['Alamat']?>" readonly>
          </div>
          <!-- RT -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Rt">RT</label>
          <select class="form-select form-select-sm" id="Rt" name="Rt"  id="Rt" aria-label="Default select example">
          <?php foreach( $Rt as $r ) : ?>
          <?php if( $r == $Akseptor['Rt'] ) : ?>
          <option value="<?= $r; ?>" selected> <?= $r; ?> </option>
          <?php else : ?>
          <option value="<?= $r; ?>" > <?= $r; ?> </option>
          <?php endif; ?>
          <?php endforeach; ?>
          </select>
          </div>
          </div>
          <!-- RW -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Rw">Rukun Warga (RW)</label>
          <input type="text" name="Rw" class="form-control form-control-sm" id="Rw" value="<?= $Akseptor['Rw']?>" readonly>
          </div>
          </div>
          </div>
          <!-- Desa -->
          <div class="mb-3">
          <label for="Desa">Desa</label>
          <input type="text" name="Desa" class="form-control form-control-sm"  id="Desa" value="<?= $Akseptor['Desa']?>" readonly>
          </div>
          <!-- Kecamatan -->
          <div class="mb-3">
          <label for="Kecamatan">Kecamatan</label>
          <input type="text" name="Kecamatan" class="form-control form-control-sm"  id="Kecamatan" value="<?= $Akseptor['Kecamatan']?>" readonly>
          </div>
          <!-- Kabupaten -->
          <div class="mb-3">
          <label for="Kabupaten">Kabupaten</label>
          <input type="text" name="Kabupaten" class="form-control form-control-sm" id="Kabupaten" value="<?= $Akseptor['Kabupaten']?>" readonly>
          </div>
          <!-- Provinsi -->
          <div class="mb-3">
          <label for="Provinsi">Provinsi</label>
          <input type="text" name="Provinsi" class="form-control form-control-sm"  id="Provinsi" value="<?= $Akseptor['Provinsi']?>" readonly>
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
          <input type="text" name="Jumlah_Anak_Lk" class="form-control form-control-sm" id="Jumlah_Anak_Lk" value="<?= $Akseptor['Jumlah_Anak_Lk']?>" >
          <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Lk') ?></small>
          </div>
          </div>
          <!-- Jumlah Anak Pr -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Jumlah_Anak_Pr">Jumlah Anak (PR)</label>
          <input type="text" name="Jumlah_Anak_Pr" class="form-control form-control-sm" id="Jumlah_Anak_Pr" value="<?= $Akseptor['Jumlah_Anak_Pr']?>" >
          <small  class="form-text text-danger"><?= form_error('Jumlah_Anak_Pr') ?></small>
          </div>
          </div>
          </div>
          <!-- Umur Anak Terkecil -->
          <div class="mb-3">
          <label for="Umur_Anak_Kecil">Umur Anak Terkecil</label>
          <input type="text" name="Umur_Anak_Kecil" class="form-control form-control-sm"  id="Umur_Anak_Kecil" value="<?= $Akseptor['Umur_Anak_Kecil']?>" >
          <small  class="form-text text-danger"><?= form_error('Umur_Anak_Kecil') ?></small>
          </div>
          <!-- Tanggal Pelkon -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Tanggal_Pelkon">Tanggal Pelkon</label>
          <input type="date" name="Tanggal_Pelkon" class="form-control form-control-sm" id="Tanggal_Pelkon" value="<?= $Akseptor['Tanggal_Pelkon']?>">
          </div>
          </div>
          <!-- Tempat Pelkon -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Tempat_Pelkon">Tempat Pelkon</label>
          <input type="text" name="Tempat_Pelkon" class="form-control form-control-sm"  id="Tempat_Pelkon" value="<?= $Akseptor['Tempat_Pelkon']?>" >
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
          <?php foreach( $Metoda_Pelkon as $mp ) : ?>
          <?php if( $mp == $Akseptor['Metoda_Pelkon'] ) : ?>
          <option value="<?= $mp; ?>" selected> <?= $mp; ?> </option>
          <?php else : ?>
          <option value="<?= $mp; ?>" > <?= $mp; ?> </option>
          <?php endif; ?>
          <?php endforeach; ?>
          </select>
          </div>
          </div>
          <!-- RW -->
          <div class="col-md-6">
          <div class="mb-3">
          <label for="Do_Dari">DO Dari</label>
          <select class="form-select form-select-sm" id="Do_Dari" name="Do_Dari" aria-label="Default select example">
          <?php foreach( $Do_Dari as $jk ) : ?>
          <?php if( $jk == $Akseptor['Do_Dari'] ) : ?>
          <option value="<?= $jk; ?>" selected> <?= $jk; ?> </option>
          <?php else : ?>
          <option value="<?= $jk; ?>" > <?= $jk; ?> </option>
          <?php endif; ?>
          <?php endforeach; ?>
          </select>
          </div>
          </div>
          </div>
          <!-- Button -->
          <br><br><br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Akseptor" role="button">Kembali</a>
            <button type="submit" name="edit" style="background-color:#5894C6"class="btn btn-primary"> Update Data </button>
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