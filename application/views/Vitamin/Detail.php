<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Detail Data Vitamin</h2><hr class="mx-auto" width="50%"><BR>

<!-- Card -->
<div class="card mx-auto" style="width: 35rem;">
  <div class="card-body">
  <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">ID Vitamin</th>
                <td>:</td>
                <td><?= $vitamin['Id_Vitamin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Nama Vitamin</th>
                <td>:</td>
                <td><?= $vitamin['Nama_Vitamin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Usia Wajib Vitamin</th>
                <td>:</td>
                <td><?= $vitamin['Usia_Wajib_Vitamin']; ?></td>
                </tr>
            </tbody>
        </table><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url(); ?>Vitamin" class="btn btn-primary float-right">KEMBALI</a>
            <a href="#" class="btn btn-warning float-left" role="button">CETAK DATA</a>
        </div>
        
  </div>

<!-- Penutup Card -->
</div>

<!-- Penutup Container -->
</div>
<br><br><br>