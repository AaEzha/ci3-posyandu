<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Melahirkan </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Lahir/tambah" role="button">Tambah Data</a>
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
      <th scope="col">Nama Istri</th>
      <th scope="col">Nama Anak</th>
      <th scope="col">Tgl Lahir Anak</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Anak Ke</th> 
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($lahir as $l) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $l['Nama_Suami']; ?></td>
      <td><?= $l['Nama_Istri']; ?></td>
      <td><?= $l['Nama_Bayi']; ?></td>
      <td><?= $l['Tanggal_Lahir_Bayi']; ?></td>
      <td><?= $l['Jenis_Kelamin_Bayi']; ?></td>
      <td><?= $l['Anak_Ke']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>lahir/detail/<?= $l['Id_Lahir']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>lahir/edit/<?= $l['Id_Lahir']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>lahir/hapus/<?= $l['Id_Lahir']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>