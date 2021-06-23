<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Vitamin Anak & Balita </h2><hr><p></p>

<!-- Flex -->
<div class="d-flex justify-content-between">
<!-- Tambah Data -->
<a class="btn text-white" style="background-color:#4597b0" href="<?= base_url(); ?>Vitamin/tambah" role="button">Tambah Data</a>
<!-- Cari Data -->
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn-outline-success" type="submit">Search</button>
</form>
</div>
<br>
<!-- Table -->
<table class="table table-sm table-bordered border-dark table-hover text-center">
  <thead class="text-center">
    <tr class= "border border-dark text-center">
      <th scope="col">No</th>
      <th scope="col">ID Vitamin</th>
      <th scope="col">Nama Vitamin</th>
      <th scope="col">Usia Wajib Anak</th>
      <th scope="col">Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($vitamin as $vit) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $vit['Id_Vitamin']; ?></td>
      <td><?= $vit['Nama_Vitamin']; ?></td>
      <td><?= $vit['Usia_Wajib_Vitamin']; ?></td>
      <td>
       <a class="btn btn-sm btn-info"  href="<?= base_url(); ?>Vitamin/detail/<?= $vit['Id_Vitamin']; ?>" role="button">Detail</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>Vitamin/edit/<?= $vit['Id_Vitamin']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
       <a class="btn btn-sm text-white" style="background-color:#9e2a2b" href="<?= base_url(); ?>Vitamin/hapus/<?= $vit['Id_Vitamin']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin dihapus?');">Hapus </a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table><br>

<!-- Penutup Container -->
</div>
<br><br><br><br><br>