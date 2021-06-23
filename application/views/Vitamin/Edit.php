<div class="container">
<br>
<h2 class="text-center"> Tambah Data Vitamin</h2>
<hr class="mx-auto" width="35%">
<p></p>
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
    <h6 class="text-center"> Formulir Tambah Data Vitamin Anak & Balita </h6>
    <hr>

    <!-- Form Validation -->
    <?php if( validation_errors() ) : 
  ?>
  <div class="alert alert-danger" role="alert">
    <?= validation_errors(); ?>
  </div>
  <?php endif; ?>

    <!--form -->
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $vitamin['Id_Vitamin']; ?>">
  <div class="mb-3">
    <label for="Nama_Vitamin" class="form-label">Nama Vitamin</label>
    <input type="text" class="form-control" name="Nama_Vitamin" value="<?= $vitamin['Nama_Vitamin']?>" >
  </div>
  <div class="mb-3">
    <label for="Usia_Wajib_Vitamin" class="form-label">Usia Wajib Anak</label>
    <input type="text" class="form-control" name="Usia_Wajib_Vitamin" value="<?= $vitamin['Usia_Wajib_Vitamin']?>">
  </div><br>
  <button type="submit" class="btn btn-sm btn-success float-end">Batal</button>
  <input class="btn btn-sm float-start text-white" type="submit" Style="background-color:#4597b0" name="edit" value="Ubah Data">
</form>

  </div>
</div>
</div>
<br><br><br><br>