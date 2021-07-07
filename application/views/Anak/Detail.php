<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Detail Data Anak dan Balita</h2><hr class="mx-auto" width="50%"><BR>

<!-- Card -->
<div class="row row-cols-1 row-cols-md-2 g-4">

  <!-- Sub Card 1 -->
  <div class="col">
    <div class="card h-100">
      <div class="card-body">

        <!-- Sub Sub Card -->
        <div class="card border-dark mx-auto" style="width: 10rem; height: 3rem;">
        <div class="card-body">
        <h6 class="text-center">Nomor Anak : <?= $anak['Id_Anak'];?></h6>
        </div>
        </div><hr>
        <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">NIK</th>
                <td>:</td>
                <td><?= $anak['NIK']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Tanggal Lahir</th>
                <td>:</td>
                <td><?= $anak['Nama_Anak']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Jenis Kelamin</th>
                <td>:</td>
                <td><?= $anak['Jenis_Kelamin']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Tempat Lahir</th>
                <td>:</td>
                <td><?= $anak['Tempat_Lahir']; ?> </td>
                </tr>
                <tr>
                <th scope="row"> Tanggal Lahir</th>
                <td>:</td>
                <td><?= $anak['Tanggal_Lahir']; ?> </td>
                </tr>
                <tr>
                <th scope="row"> Umur</th>
                <td>:</td>
                <td><?= umur($anak['Tanggal_Lahir'], "hari"); ?></td>
                </tr>
                <tr>
                <th scope="row"> Nama Ibu</th>
                <td>:</td>
                <td><?= penduduk($anak['nik_ibu']); ?></td>
                </tr>
                <tr>
                <th scope="row"> Nama Ayah</th>
                <td>:</td>
                <td><?= penduduk($anak['nik_ayah']); ?></td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Sub Card 2 -->
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
      <table class="table">
            <tbody class="">
                <tr>
                <th scope="row">Alamat</th>
                <td>:</td>
                <td><?= $anak['Alamat']; ?></td>
                </tr>
                <tr>
                <th scope="row">RT</th>
                <td>:</td>
                <td><?= $anak['Rt']; ?></td>
                </tr>
                <tr>
                <th scope="row"> RW</th>
                <td>:</td>
                <td><?= $anak['Rw']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Desa</th>
                <td>:</td>
                <td><?= $anak['Desa']; ?> </td>
                </tr>
                <tr>
                <th scope="row">Kecamatan</th>
                <td>:</td>
                <td><?= $anak['Kecamatan']; ?> </td>
                </tr>
                <tr>
                <th scope="row"> Kabupaten</th>
                <td>:</td>
                <td><?= $anak['Kabupaten']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Provinsi</th>
                <td>:</td>
                <td><?= $anak['Provinsi']; ?></td>
                </tr>
                <tr>
                <th scope="row"> Status Warga</th>
                <td>:</td>
                <td><?= $anak['Status_Warga']; ?></td>
                </tr>
            </tbody>
        </table><br>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url(); ?>Anak" class="btn btn-primary float-right">KEMBALI</a>
            <a href="#" class="btn btn-warning float-left" role="button">CETAK DATA</a>
        </div>
      </div>
    </div>
  </div>

<!-- Penutup-->
</div>

<!-- Penutup Container -->
</div>
<br><br><br>
