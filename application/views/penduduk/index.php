<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Master Penduduk </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>penduduk/tambah" role="button">Tambah Data</a>
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
      <th scope="col">NIK</th>
      <th scope="col">No KK</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Umur</th>
      <th scope="col">Status Hubungan</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($data as $d) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $d['NIK']; ?></td>
      <td><?= $d['No_KK']; ?></td>
      <td><?= $d['Nama']; ?></td>
      <td><?= $d['Jenis_Kelamin']; ?></td>
      <td><?= $d['Tanggal_Lahir']; ?></td>
      <td><?= umur($d['Tanggal_Lahir']); ?></td>
      <td><?= $d['Status_Hubungan']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>penduduk/detail/<?= $d['NIK']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>penduduk/edit/<?= $d['NIK']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <!-- <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>penduduk/hapus/<?= $d['NIK']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a> -->
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>
