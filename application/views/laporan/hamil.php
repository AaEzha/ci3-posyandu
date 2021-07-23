<!-- Container -->
<div class="container" id="printableArea">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Laporan <?= $title; ?> </h2>
	<hr>
	<p></p>

	<br>
	<!-- Table -->
	<table class="table table-bordered border-dark table-sm text-center">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Suami</th>
				<th scope="col">Umur Suami</th>
				<th scope="col">Nama Istri</th>
				<th scope="col">Umur Istri</th>
				<th scope="col">Hamil Ke</th>
				<th scope="col">Alamat</th>
				<th scope="col">RT </th>
				<th scope="col">RW</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 0; ?>
			<?php foreach ($hamil as $k) : ?>
				<tr>
					<td><?= $k['Id_Kehamilan']; ?></td>
					<td><?= $k['Nama_Suami']; ?></td>
					<td><?= $k['Umur_Suami']; ?></td>
					<td><?= $k['Nama_Istri']; ?></td>
					<td><?= $k['Umur_Istri']; ?></td>
					<td><?= $k['Hamil_Ke']; ?></td>
					<td><?= $k['Alamat']; ?></td>
					<td><?= $k['Rt']; ?></td>
					<td><?= $k['Rw']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>

	<!-- Penutup Container -->
</div>
<div class="row mb-5">
	<div class="col text-center">
		<input type="button" onclick="printDiv('printableArea')" value="CETAK" />
	</div>
</div>
