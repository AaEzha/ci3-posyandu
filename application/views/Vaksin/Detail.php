<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Detail Data Vaksin</h2><hr class="mx-auto" width="50%"><BR>

<!-- Card -->
<div class="card mx-auto" style="width: 35rem;">
  <div class="card-body">
  <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">ID Vaksin</th>
                <td>:</td>
                <td><?= $vaksin['Id_Vaksin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Tanggal Lahir</th>
                <td>:</td>
                <td><?= $vaksin['Nama_Vaksin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Jenis Kelamin</th>
                <td>:</td>
                <td><?= $vaksin['Usia_Wajib_Vaksin']; ?></td>
                </tr>
            </tbody>
        </table><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url(); ?>Vaksin" class="btn btn-sm btn-primary float-right">KEMBALI</a>
            <a href="#" class="btn btn-sm btn-warning float-left" role="button">CETAK DATA</a>
        </div>
  </div>

<!-- Penutup Card -->
</div>

<!-- Penutup Container -->
</div>
<br><br><br>