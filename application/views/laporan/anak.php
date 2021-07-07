<!-- Container -->
<div class="container" id="printableArea">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Laporan <?= $title; ?> </h2>
	<hr>
	<p></p>

	<br>
	<!-- Table -->
	<table class="table table-sm table-bordered border-dark table-hover text-center">
		<thead class="text-center">
			<tr class="border border-dark text-center">
				<th scope="col">ID Anak</th>
				<th scope="col">NIK Anak</th>
				<th scope="col">Nama Anak</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Tempat Lahir </th>
				<th scope="col">Tanggal Lahir </th>
				<th scope="col">Anak Ke-</th>
			</tr>
			<tr class="border border-dark text-center">
				<th scope="col">Nama Ibu</th>
				<th scope="col">Nama Ayah</th>
				<th scope="col">Alamat</th>
				<th scope="col">RT / RW</th>
				<th scope="col">Desa / Kecamatan</th>
				<th scope="col">Kabupaten / Provinsi</th>
				<th scope="col">Status Warga</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($anak as $d) : ?>
				<tr class="bg-primary">
					<td colspan="7"></td>
				</tr>
				<tr>
					<td><?= $d['Id_Anak'] ?></td>
					<td><?= $d['NIK']; ?></td>
					<td><?= $d['Nama_Anak']; ?></td>
					<td><?= $d['Jenis_Kelamin']; ?></td>
					<td><?= $d['Tempat_Lahir']; ?></td>
					<td><?= tanggal($d['Tanggal_Lahir']); ?></td>
					<td><?= $d['Anak_Ke']; ?></td>
				</tr>
				<tr>
					<td><?= penduduk($d['nik_ibu']) ?></td>
					<td><?= penduduk($d['nik_ayah']) ?></td>
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
