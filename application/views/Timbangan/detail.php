<!-- Container -->
<div class="container">
<br>

<!-- Text -->
<h2 class="text-center"> Data Anak dan Balita : <?=$anak->Nama_Anak;?> (<?=umur($anak->Tanggal_Lahir, 'hari');?>)</h2><hr><p></p>
<br>
 
<!-- Table -->
<table class="table table-bordered border-dark table-sm text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Timbang</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Vitamin</th>
      <th scope="col">Vaksin</th>
      <th scope="col">Hasil Gizi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0; ?>
  <?php foreach ($timbangan as $tb) : ?>
    <tr>
      <td><?= ++$no ?></td>
      <td><?= tanggal($tb['Tanggal_Timbang']); ?></td>
      <td><?= $tb['Berat_Badan']; ?> gram</td>
      <td><?= $tb['Tinggi_Badan']; ?> cm</td>
      <td><?= getData($tb['Id_Vitamin'], 'Id_Vitamin', 'vitamin', 'Nama_Vitamin'); ?></td>
      <td><?= getData($tb['Id_Vaksin'], 'Id_Vaksin', 'vaksin', 'Nama_Vaksin'); ?></td>
      <td><?= $tb['Hasil_Gizi']; ?> </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table><br>

<!-- Penutup Container -->
</div>
<br><br><br>
