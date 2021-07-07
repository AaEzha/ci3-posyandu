<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Penduduk Pindah </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Pindah/tambah" role="button">Tambah Data</a>
<!-- Cari Data -->
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn-outline-success" type="submit">Search</button>
</form>
</div>
<br>
<!-- Menampilkan Data Warga Asli -->
<table class="table table-bordered border-dark table-sm text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama KK</th>
      <th scope="col">Nama Istri</th>
      <th scope="col">Alamat Pindah</th>
      <th scope="col">RT</th>
      <th scope="col">Jumlah Jiwa LK</th>
      <th scope="col">Jumlah Jiwa PR</th>
      <th scope="col">Jumlah Anak LK</th>
      <th scope="col">Jumlah Anak PR</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($pindah as $p) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $p['Nama_KK_Pindah']; ?></td>
      <td><?= $p['Nama_Istri_Pindah']; ?></td>
      <td><?= $p['Alamat_Pindah']; ?></td>
      <td><?= $p['Rt_Pindah']; ?></td>
      <td><?= $p['Jumlah_Jiwa_Lk_Pindah']; ?></td>
      <td><?= $p['Jumlah_Jiwa_Pr_Pindah']; ?></td>
      <td><?= $p['Jumlah_Anak_Lk_Pindah']; ?></td>
      <td><?= $p['Jumlah_Anak_Pr_Pindah']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>pindah/detail/<?= $p['Id_Pindah']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>pindah/edit/<?= $p['Id_Pindah']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>pindah/hapus/<?= $p['Id_Pindah']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>
