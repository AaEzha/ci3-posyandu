<!-- Container -->
<div class="container" id="printableArea">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Laporan <?= $title; ?></h2>
	<hr>
	<p></p>

	<br>
	<!-- Table -->
	<table class="table table-sm table-bordered border-dark table-hover text-center">
		<thead class="text-center">
			<tr class="border border-dark text-center">
				<th scope="col">Nama KK</th>
				<th scope="col">Umur</th>
				<th scope="col">Nama Istri</th>
				<th scope="col">Umur</th>
				<th scope="col">KB</th>
				<th scope="col">KS</th>
				<th scope="col">Jml Anak L</th>
				<th scope="col">Jml Anak P</th>
			</tr>
			<tr class="border border-dark text-center">
				<th scope="col">Alamat</th>
				<th scope="col">RT/RW</th>
				<th scope="col">Desa</th>
				<th scope="col">Kecamatan</th>
				<th scope="col">Kabupaten</th>
				<th scope="col">Provinsi</th>
				<th scope="col">Jml Jiwa L</th>
				<th scope="col">Jml Jiwa P</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($data as $d) : ?>
				<tr class="bg-primary">
					<td colspan="8"></td>
				</tr>
				<tr>
					<td><?= $d['Nama_KK'] ?></td>
					<td><?= umur($d['Tanggal_Lahir_KK']); ?></td>
					<td><?= $d['Nama_Istri']; ?></td>
					<td><?= umur($d['Tanggal_Lahir_Istri']); ?></td>
					<td><?= $d['Kb']; ?></td>
					<td><?= $d['Ks']; ?></td>
					<td><?= $d['Jumlah_Anak_Lk']; ?></td>
					<td><?= $d['Jumlah_Anak_Pr']; ?></td>
				</tr>
				<tr>
					<td><?= $d['Alamat_Datang'] ?></td>
					<td><?= $d['Rt_Datang']; ?> / <?= $d['Rw']; ?></td>
					<td><?= $d['Desa_Datang']; ?></td>
					<td><?= $d['Kecamatan_Datang']; ?></td>
					<td><?= $d['Kabupaten_Datang']; ?></td>
					<td><?= $d['Provinsi_Datang']; ?></td>
					<td><?= $d['Jumlah_Jiwa_Lk']; ?></td>
					<td><?= $d['Jumlah_Jiwa_Pr']; ?></td>
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
