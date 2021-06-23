<div class="container">
<br>
<h2 class="text-center">Form Penambahan Data Vitamin</h2>
<hr class="mx-auto" width="35%"><br>
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
  <h4 class="card-title text-center">DATA VITAMIN</h4><hr class="mx-auto" width="50%"><br>

    <!--form -->
    <form action="" method="POST">
    <input type="hidden" class="form-control" name="Id_Vitamin" value="VIT-<?php echo sprintf("%03s", $Id_Vitamin) ?>" readonly>
  <div class="mb-3">
    <label for="Nama_Vitamin" class="form-label">Nama Vitamin</label>
    <input type="text" class="form-control" name="Nama_Vitamin" aria-describedby="emailHelp">
    <small  class="form-text text-danger"><?= form_error('Nama_Vitamin') ?></small>
  </div>
  <div class="mb-3">
    <label for="Usia_Wajib_Vitamin" class="form-label">Usia Wajib Anak</label>
    <input type="text" class="form-control" name="Usia_Wajib_Vitamin" aria-describedby="emailHelp">
    <small  class="form-text text-danger"><?= form_error('Usia_Wajib_Vitamin') ?></small>
  </div><br>
  <!-- Button -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn " style="background-color:#B1C695" href="<?= base_url();?>Vitamin" role="button">Kembali</a>
          <button type="submit" style="background-color:#5894C6" name="tambah" class="btn btn-primary"> Simpan Data </button>
        </div>
</form>

  </div>
</div>
</div>
<br><br><br><br>