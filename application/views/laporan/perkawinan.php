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
				<th scope="col">Nama Suami</th>
				<th scope="col">Tanggal Lahir Suami</th>
				<th scope="col">Umur Suami</th>
				<th scope="col">Pendidikan Suami</th>
				<th scope="col">Pekerjaan Suami</th>
				<th scope="col">Alamat Suami</th>
			</tr>
			<tr class="border border-dark text-center">
			<th scope="col">Nama Istri</th>
				<th scope="col">Tanggal Lahir Istri</th>
				<th scope="col">Umur Istri</th>
				<th scope="col">Pendidikan Istri</th>
				<th scope="col">Pekerjaan Istri</th>
				<th scope="col">Alamat Istri</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($data as $d) : ?>
				<tr class="bg-primary">
					<td colspan="6"></td>
				</tr>
				<tr>
					<td><?= $d['Nama_Suami'] ?></td>
					<td><?= tanggal($d['Tanggal_Lahir_Suami']); ?></td>
					<td><?= $d['Umur_Suami']; ?></td>
					<td><?= $d['Pendidikan_Suami']; ?></td>
					<td><?= $d['Pekerjaan_Suami']; ?></td>
					<td><?= $d['Kabupaten_Suami']; ?> - <?= $d['Provinsi_Suami']; ?></td>
				</tr>				
				<tr>
					<td><?= $d['Nama_Istri'] ?></td>
					<td><?= tanggal($d['Tanggal_Lahir_Istri']); ?></td>
					<td><?= $d['Umur_Istri']; ?></td>
					<td><?= $d['Pendidikan_Istri']; ?></td>
					<td><?= $d['Pekerjaan_Istri']; ?></td>
					<td><?= $d['Kabupaten_Istri']; ?> - <?= $d['Provinsi_Istri']; ?></td>
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
