<!-- Container -->
<div class="container"><br>
<h2 class="text-center"> Form Edit Data Melahirkan</h2>
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
        <input type="hidden" class="form-control form-control-sm"  name="Id_Lahir" value="<?= $lahir['Id_Lahir']; ?>" readonly>
          <!-- Field -->
          <!-- Nama Suami -->
          <div class="mb-3">
          <label for="Nama_Suami">Nama Suami</label>
          <input type="text" name="Nama_Suami" class="form-control form-control-sm" value="<?= $lahir['Nama_Suami']; ?>">
          <small  class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
          </div>
          <!-- Tanggal Lahir Suami -->
          <div class="mb-3">
          <label for="Umur_Suami">Umur</label>
          <input type="text" name="Umur_Suami" class="form-control form-control-sm"value="<?= $lahir['Umur_Suami']; ?>">
          <small  class="form-text text-danger"><?= form_error('Umur_Suami') ?></small>
          </div><br><hr>
          <!-- Data Istri -->
          <h5 class="card-title text-center"><strong>DATA DIRI ISTRI</strong></h5><hr class="mx-auto" width="40%">
          <!-- Nama Istri -->
          <div class="mb-3">
          <label for="Nama_Istri">Nama Istri</label>
          <input type="text" name="Nama_Istri" class="form-control form-control-sm" id="Nama_Istri"value="<?= $lahir['Nama_Istri']; ?>">
          <small  class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
          </div>
          <!-- Tanggal Lahir Istri -->
          <div class="mb-3">
          <label for="Umur_Istri">Umur</label>
          <input type="text" name="Umur_Istri" class="form-control form-control-sm" value="<?= $lahir['Umur_Istri']; ?>">
          <small  class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
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
          <input type="text" name="Alamat" class="form-control form-control-sm" id="Alamat" value="<?= $lahir['Alamat']; ?>" readonly>
          </div>
          <!-- RT -->
          <div class="row">
          <div class="col-md-6">
          <div class="mb-3 ">
          <label for="Rt">RT</label>
          <select class="form-select form-select-sm" id="Rt" name="Rt">
          <?php foreach( $Rt as $r ) : ?>
            <?php if( $r == $lahir['Rt'] ) : ?>
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
          <label for="Rw">RW</label>
          <input type="text" name="Rw" class="form-control form-control-sm" id="Rw" value="<?= $lahir['Rw']; ?>" readonly>
          </div>
          </div>
          </div>
          <!-- Desa -->
          <div class="mb-3">
          <label for="Desa">Desa</label>
          <input type="text" name="Desa" class="form-control form-control-sm"  id="Desa" value="<?= $lahir['Desa']; ?>" readonly>
          </div>
          <!-- Kecamatan -->
          <div class="mb-3">
          <label for="Kecamatan">Kecamatan</label>
          <input type="text" name="Kecamatan" class="form-control form-control-sm"  id="Kecamatan" value="<?= $lahir['Kecamatan']; ?>" readonly>
          </div>
          <!-- Kabupaten -->
          <div class="mb-3">
          <label for="Kabupaten">Kabupaten</label>
          <input type="text" name="Kabupaten" class="form-control form-control-sm" id="Kabupaten"value="<?= $lahir['Kabupaten']; ?>" readonly>
          </div>
          <!-- Provinsi -->
          <div class="mb-3">
          <label for="Provinsi">Provinsi</label>
          <input type="text" name="Provinsi" class="form-control form-control-sm"  id="Provinsi"value="<?= $lahir['Provinsi']; ?>" readonly>
          </div>
          <!-- Penutup Div Sub Sub Card 2-->
          </div>
        </div>
    </div>
    <!-- Sub Sub Card 3 -->
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title text-center"><strong>DATA ANAK</strong></h5><hr class="mx-auto" width="40%">
          <!-- Data Aanak -->
          <!-- Umur Anak Terkecil -->
          <div class="mb-3">
          <label for="Nama_Bayi">Nama Anak</label>
          <input type="text" name="Nama_Bayi" class="form-control form-control-sm" value="<?= $lahir['Nama_Bayi']; ?>">
          <small  class="form-text text-danger"><?= form_error('Nama_Bayi') ?></small>
          </div>
          <!-- Umur Anak Terkecil -->
          <div class="mb-3">
          <label for="Tanggal_Lahir_Bayi">Tanggal Lahir Anak</label>
          <input type="date" name="Tanggal_Lahir_Bayi" class="form-control form-control-sm" value="<?= $lahir['Tanggal_Lahir_Bayi']; ?>">
          </div>
          <div class="mb-3 ">
          <label for="Jenis_Kelamin_Bayi">Jenis Kelamin Anak</label>
          <select class="form-select form-select-sm" id="Jenis_Kelamin_Bayi" name="Jenis_Kelamin_Bayi">
          <?php foreach( $Jenis_Kelamin_Bayi as $jk ) : ?>
          <?php if( $Jenis_Kelamin_Bayi == $lahir['Jenis_Kelamin_Bayi'] ) : ?>
          <option value="<?= $jk; ?>" selected> <?= $jk; ?> </option>
          <?php else : ?>
          <option value="<?= $jk; ?>" > <?= $jk; ?> </option>
          <?php endif; ?>
          <?php endforeach; ?>
          </select>
          </div>
          <!-- Umur Anak Terkecil -->
          <div class="mb-3">
          <label for="Anak_Ke">Anak Ke</label>
          <input type="text" name="Anak_Ke" class="form-control form-control-sm" value="<?= $lahir['Anak_Ke']; ?>">
          <small  class="form-text text-danger"><?= form_error('Anak_Ke') ?></small>
          </div>
        
          <!-- Button -->
          <br><br><br><br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Lahir" role="button">Kembali</a>
            <button type="submit" name="edit" style="background-color:#5894C6"class="btn btn-primary"> Update Data</button>
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
