<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Anak dan Balita </h2><hr ><p></p>

<!-- Button Atas  -->
<div class="d-grid gap-2 d-md-flex">
    <!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Akseptor/Tambah" role="button">Tambah Data</a>
<!-- Penutup Div Button -->
</div>
<br>

<!-- Menampilkan Data Warga Asli -->
<table class="table table-bordered border-dark table-sm text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Akseptor</th>
      <th scope="col">Nama Suami</th>
      <th scope="col">Umur Suami</th>
      <th scope="col">Nama Istri</th>
      <th scope="col">Umur Istri</th>
      <th scope="col">Tanggal Pelkon</th> 
      <th scope="col">Metoda</th>
      <th scope="col">DO Dari</th>
      <th scope="col">Tempat Pelkon</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($akseptor as $aks) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $aks['Id_Akseptor']; ?></td>
      <td><?= $aks['Nama_Suami']; ?></td>
      <td><?= $aks['Umur_Suami']; ?></td>
      <td><?= $aks['Nama_Istri']; ?></td>
      <td><?= $aks['Umur_Istri']; ?></td>
      <td><?= $aks['Tanggal_Pelkon']; ?></td>
      <td><?= $aks['Metoda_Pelkon']; ?> </td>
      <td><?= $aks['Do_Dari']; ?> </td>
      <td><?= $aks['Tempat_Pelkon']; ?> </td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>Akseptor/detail/<?= $aks['Id_Akseptor']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>Akseptor/edit/<?= $aks['Id_Akseptor']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>Akseptor/hapus/<?= $aks['Id_Akseptor']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>

<!-- Penutup Container -->
</div>
<br><br><br>