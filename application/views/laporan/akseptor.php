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
				<th scope="col">Nama Suami</th>
				<th scope="col">Umur Suami</th>
				<th scope="col">Nama Istri</th>
				<th scope="col">Umur Istri</th>
				<th scope="col">Tanggal Pelkon </th>
				<th scope="col">Metode Pelkon </th>
				<th scope="col">Tempat Pelkon </th>
				<th scope="col">DO Dari</th>
			</tr>
			<tr class="border border-dark text-center">
				<th scope="col">Jumlah Anak L</th>
				<th scope="col">Jumlah Anak P</th>
				<th scope="col">Umur Anak Kecil</th>
				<th scope="col">Alamat</th>
				<th scope="col">RT / RW</th>
				<th scope="col">Desa / Kecamatan</th>
				<th scope="col">Kabupaten / Provinsi</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($data as $d) : ?>
				<tr class="bg-primary">
					<td colspan="8"></td>
				</tr>
				<tr>
					<td><?= $d['Nama_Suami'] ?></td>
					<td><?= $d['Umur_Suami']; ?></td>
					<td><?= $d['Nama_Istri']; ?></td>
					<td><?= $d['Umur_Istri']; ?></td>
					<td><?= tanggal($d['Tanggal_Pelkon']); ?></td>
					<td><?= $d['Metoda_Pelkon']; ?></td>
					<td><?= $d['Tempat_Pelkon']; ?></td>
					<td><?= $d['Do_Dari']; ?></td>
				</tr>
				<tr>
					<td><?= $d['Jumlah_Anak_Lk']; ?></td>
					<td><?= $d['Jumlah_Anak_Pr']; ?></td>
					<td><?= $d['Umur_Anak_Kecil']; ?></td>
					<td><?= $d['Alamat']; ?></td>
					<td><?= $d['Rt'] . "/" . $d['Rw']; ?></td>
					<td><?= $d['Desa'] . "/" . $d['Kecamatan']; ?></td>
					<td><?= $d['Kabupaten'] . "/" . $d['Provinsi']; ?></td>
					<td><?= $d['Status_Warga']; ?></td>
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
