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
				<th scope="col">Nama Bayi</th>
				<th scope="col">Tanggal Lahir Bayi</th>
			</tr>
			<tr class="border border-dark text-center">
				<th scope="col">Jenis Kelamin Bayi</th>
				<th scope="col">Anak Ke-</th>
				<th scope="col">Alamat</th>
				<th scope="col">RT / RW</th>
				<th scope="col">Desa / Kecamatan</th>
				<th scope="col">Kabupaten / Provinsi</th>
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
					<td><?= $d['Nama_Bayi']; ?></td>
					<td><?= tanggal($d['Tanggal_Lahir_Bayi']); ?></td>
				</tr>
				<tr>
					<td><?= $d['Jenis_Kelamin_Bayi']; ?></td>
					<td><?= $d['Anak_Ke']; ?></td>
					<td><?= $d['Alamat']; ?></td>
					<td><?= $d['Rt'] . "/" . $d['Rw']; ?></td>
					<td><?= $d['Desa'] . "/" . $d['Kecamatan']; ?></td>
					<td><?= $d['Kabupaten'] . "/" . $d['Provinsi']; ?></td>
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
