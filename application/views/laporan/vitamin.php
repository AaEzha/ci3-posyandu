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
				<th scope="col">No</th>
				<th scope="col">Id Vitamin</th>
				<th scope="col">Nama Vitamin</th>
				<th scope="col">Usia Wajib Vitamin</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($data as $d) : ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $d['Id_Vitamin']; ?></td>
					<td><?= $d['Nama_Vitamin']; ?></td>
					<td><?= $d['Usia_Wajib_Vitamin']; ?></td>
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
