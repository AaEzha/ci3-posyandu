<div class="container">
<br>
<h2 class="text-center"> Edit Data Artikel</h2>
<hr class="mx-auto" width="35%">
<p></p>
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
    <h6 class="text-center"> Formulir Edit Data Artikel </h6>
    <hr>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
        </div>
    <!--form -->
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $visi['Kode_Artikel']; ?>">
  <div class="mb-3">
    <label for="Judul_Artikel" class="form-label">Judul Artikel</label>
    <input type="text" class="form-control" name="Judul_Artikel" value="<?= $visi['Judul_Artikel']?>" >
  </div>
  <div class="mb-3">
    <textarea class="form-control"id="Isi_Artikel" style="height: 110px" name="Isi_Artikel"><?= $visi['Isi_Artikel']?></textarea>
  </div><br>
  <button type="submit" class="btn btn-sm btn-success float-end">Batal</button>
  <button type="submit" style="background-color:#5894C6" name="edit" class="btn btn-primary"> PERBAHARUI DATA </button>
</form>
  </div>
</div>
</div>
<br><br><br><br>