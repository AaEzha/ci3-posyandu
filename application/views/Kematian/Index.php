<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Kematian </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Kematian/tambah" role="button">Tambah Data</a>
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
      <th scope="col">Nama Meninggal</th>
      <th scope="col">Umur</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">RT</th>
      <th scope="col">RW</th>
      <th scope="col">Tanggal Meninggal</th> 
      <th scope="col">Penyebab</th> 
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($mati as $m) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $m['Nama_Meninggal']; ?></td>
      <td><?= $m['Umur']; ?></td>
      <td><?= $m['Jenis_Kelamin']; ?></td>
      <td><?= $m['Rt']; ?></td>
      <td><?= $m['Rw']; ?></td>
      <td><?= $m['Tanggal_Meninggal']; ?></td>
      <td><?= $m['Penyebab']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>kematian/detail/<?= $m['Id_Kematian']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>kematian/edit/<?= $m['Id_Kematian']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>kematian/hapus/<?= $m['Id_Kematian']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>