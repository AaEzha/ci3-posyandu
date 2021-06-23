<div class="container">
<br>
<h2 class="text-center"> Form Penambahan Data Vaksin</h2>
<hr class="mx-auto" width="35%">
<BR>
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
  <h4 class="card-title text-center">DATA VAKSIN</h4><hr class="mx-auto" width="50%"><br>

    <!--form -->
    <form action="" method="POST">
    <input type="hidden" class="form-control" name="Id_Vaksin" value="VK-<?php echo sprintf("%03s", $Id_Vaksin) ?>" readonly>
  <div class="mb-3">
    <label for="Nama_Vaksin" class="form-label">Nama Vaksin</label>
    <input type="text" class="form-control" name="Nama_Vaksin" aria-describedby="emailHelp">
    <small  class="form-text text-danger"><?= form_error('Nama_Vaksin') ?></small>
  </div>
  <div class="mb-3">
    <label for="Usia_Wajib_Vaksin" class="form-label">Usia Wajib Anak</label>
    <input type="text" class="form-control" name="Usia_Wajib_Vaksin" aria-describedby="emailHelp">
    <small  class="form-text text-danger"><?= form_error('Usia_Wajib_Vaksin') ?></small>
  </div><br>
  <!-- Button -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Vaksin" role="button">Kembali</a>
          <button type="submit" style="background-color:#5894C6" name="tambah" class="btn btn-primary"> Simpan Data </button>
        </div>
</form>

  </div>
</div>
</div>
<br><br><br><br>