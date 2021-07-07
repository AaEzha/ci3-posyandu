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
				<th scope="col">Nama Jenazah</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Umur</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Tanggal Meninggal</th>
				<th scope="col">Sebab Meninggal</th>
			</tr>
			<tr class="border border-dark text-center">
				<th scope="col">Alamat</th>
				<th scope="col">RT/RW</th>
				<th scope="col">Desa</th>
				<th scope="col">Kecamatan</th>
				<th scope="col">Kabupaten</th>
				<th scope="col">Provinsi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($data as $d) : ?>
				<tr class="bg-primary">
					<td colspan="6"></td>
				</tr>
				<tr>
					<td><?= $d['Nama_Meninggal'] ?></td>
					<td><?= tanggal($d['Tanggal_Lahir']); ?></td>
					<td><?= $d['Umur']; ?></td>
					<td><?= $d['Jenis_Kelamin']; ?></td>
					<td><?= tanggal($d['Tanggal_Meninggal']); ?></td>
					<td><?= $d['Penyebab']; ?></td>
				</tr>
				<tr>
					<td><?= $d['Alamat'] ?></td>
					<td><?= $d['Rt']; ?> / <?= $d['Rw']; ?></td>
					<td><?= $d['Desa']; ?></td>
					<td><?= $d['Kecamatan']; ?></td>
					<td><?= $d['Kabupaten']; ?></td>
					<td><?= $d['Provinsi']; ?></td>
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
