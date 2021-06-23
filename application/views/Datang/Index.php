<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Penduduk Datang </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Datang/tambah" role="button">Tambah Data</a>
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
  <?php foreach ($datang as $d) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $d['Nama_KK']; ?></td>
      <td><?= $d['Nama_Istri']; ?></td>
      <td><?= $d['Alamat_Datang']; ?></td>
      <td><?= $d['Rt_Datang']; ?></td>
      <td><?= $d['Jumlah_Jiwa_Lk']; ?></td>
      <td><?= $d['Jumlah_Jiwa_Pr']; ?></td>
      <td><?= $d['Jumlah_Anak_Lk']; ?></td>
      <td><?= $d['Jumlah_Anak_Pr']; ?></td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>datang/detail/<?= $d['Id_Datang']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>datang/edit/<?= $d['Id_Datang']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>datang/hapus/<?= $d['Id_Datang']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>