<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Anak dan Balita </h2><hr><p></p>
<br>
 
<!-- Table -->
<table class="table table-bordered border-dark table-sm text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th> 
      <th scope="col">Umur</th> 
      <th scope="col">Nama Ibu</th>
      <th scope="col">Nama Ayah</th>
      <th scope="col"> Aksi </th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($Timbang as $tb) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= $tb['NIK']; ?></td>
      <td><?= $tb['Nama_Anak']; ?></td>
      <td><?= $tb['Jenis_Kelamin']; ?></td>
      <td><?= $tb['Tanggal_Lahir']; ?> </td>
      <td><?= $tb['Umur']; ?> </td>
      <td><?= $tb['Nama_Ibu']; ?> </td>
      <td><?= $tb['Nama_Ayah']; ?> </td>
      <td>
       <a class="btn btn-sm btn-info" href="<?= base_url(); ?>timbangan/detail/<?= $tb['Id_Anak']; ?>" role="button">Detail Cek</a>
       <a class="btn btn-sm" style="background-color:#FCCA46" href="<?= base_url(); ?>Timbangan/tambah/<?= $tb['Id_Anak']; ?>" role="button" onclick="return confirm('Apakah yakin data ingin ditambah?');">Tambah Cek</a>
       </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table><br>

<!-- Penutup Container -->
</div>
<br><br><br>
