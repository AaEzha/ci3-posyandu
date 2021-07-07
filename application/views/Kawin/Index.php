<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Perkawinan </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Kawin/tambah" role="button">Tambah Data</a>
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
      <th scope="col">Nama Suami</th>
      <th scope="col">Umur Suami</th>
      <th scope="col">Alamat Suami</th>
      <th scope="col">Pekerjaan Suami</th>
      <th scope="col">Nama Istri</th>
      <th scope="col">Umur Istri</th> 
      <th scope="col">Alamat Istri</th>
      <th scope="col">Pekerjaan Istri</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($kawin as $k) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $k['Nama_Suami']; ?></td>
      <td><?= $k['Umur_Suami']; ?></td>
      <td><?= $k['Alamat_Suami']; ?></td>
      <td><?= $k['Pekerjaan_Suami']; ?></td>
      <td><?= $k['Nama_Istri']; ?></td>
      <td><?= $k['Umur_Istri']; ?></td>
      <td><?= $k['Alamat_Istri']; ?></td>
      <td><?= $k['Pekerjaan_Istri']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>kawin/detail/<?= $k['Id_Kawin']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>kawin/edit/<?= $k['Id_Kawin']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>kawin/hapus/<?= $k['Id_Kawin']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>
