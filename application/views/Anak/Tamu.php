<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Anak dan Balita Warga Tamu </h2><hr><p></p>

<!-- Add Balita -->
<div class="d-grid gap-4 d-md-flex">
<div class="dropdown">
  <a class="btn text-white dropdown-toggle" style="background-color:#4597b0" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Tambah Data
  </a>
  <!-- Isi Dropdown -->
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="<?= base_url(); ?>Anak/Tambah">Warga Asli</a></li>
    <li><a class="dropdown-item" href="<?= base_url(); ?>Anak/Tambah2">Warga Tamu </a></li>
  </ul>
</div>
<!-- Nav -->
<div class="button mx-auto">
  <a class="btn  btn-outline-dark " href="<?= base_url(); ?>Anak" role="button">Warga Asli</a>
  <a class="btn  btn-outline-dark" href="<?= base_url(); ?>Anak/Tamu" role="button">Warga Tamu</a>
</div>

<!-- Search Data -->
<form class="d-flex">
          <input class="form-control me-2" style="width: 8rem;" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success " style="width: 5rem;" type="submit">Search</button>
  </form>
</div><br>

<!-- Table -->
<table class="table table-bordered border-dark table-sm text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Anak</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Umur</th> 
      <th scope="col">Nama Ibu</th>
      <th scope="col">Nama Ayah</th>
      <th scope="col">Status Warga</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($anak as $blt) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $blt['Id_Anak']; ?></td>
      <td><?= $blt['Nama_Anak']; ?></td>
      <td><?= $blt['Jenis_Kelamin']; ?></td>
      <td><?= umur($blt['Tanggal_Lahir'], "hari"); ?> </td>
      <td><?= $blt['Nama_Ibu']; ?> </td>
      <td><?= $blt['Nama_Ayah']; ?> </td>
      <td><?= $blt['Status_Warga']; ?> </td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>Anak/detail/<?= $blt['Id_Anak']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>Anak/ubah/<?= $blt['Id_Anak']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>Anak/hapus/<?= $blt['Id_Anak']; ?>"role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table><br>

<!-- Penutup Container -->
</div>
<br><br><br>
<!-- Penutup Container -->
</div>
<br><br><br>
