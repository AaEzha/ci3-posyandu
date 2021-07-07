<!-- Container -->
<div class="container" id="printableArea">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Laporan <?= $title; ?> <?=$bulan;?></h2>
	<hr>
	<p></p>

	<br>
	<!-- Table -->
	<table class="table table-sm table-bordered border-dark table-hover text-center">
		<thead class="text-center">
			<tr class="border border-dark text-center">
				<th scope="col">No</th>
				<th scope="col">NIK Anak</th>
				<th scope="col">Nama Anak</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Umur</th>
				<th scope="col">Berat Badan</th>
				<th scope="col">Tinggi Badan</th>
				<th scope="col">Vitamin</th>
				<th scope="col">Vaksin</th>
				<th scope="col">Hasil Gizi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($data as $d) : ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $d['NIK']; ?></td>
					<td><?= penduduk($d['NIK']); ?></td>
					<td><?= penduduk($d['NIK'], 'Jenis_Kelamin'); ?></td>
					<td><?= umur(penduduk($d['NIK'], 'Tanggal_Lahir'), 'hari'); ?></td>
					<td><?= $d['Berat_Badan']; ?></td>
					<td><?= $d['Tinggi_Badan']; ?></td>
					<td><?= getData($d['Id_Vitamin'],'Id_Vitamin','vitamin','Nama_Vitamin'); ?></td>
					<td><?= getData($d['Id_Vaksin'],'Id_Vaksin','vaksin','Nama_Vaksin'); ?></td>
					<td><?= $d['Hasil_Gizi']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>

	<!-- Penutup Container -->
</div>
<div class="row mb-5">
	<div class="col text-center">
		<input type="button" onclick="printDiv('printableArea')" value="CETAK" />
	</div>
</div>
