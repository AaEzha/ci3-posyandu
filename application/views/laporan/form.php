<!-- Container -->
<div class="container" id="printableArea">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Laporan <?= $title; ?> </h2>
	<hr>
	<p></p>

	<br>

	<form class="row row-cols-lg-auto g-3 align-items-center mb-5" method="POST" action="">
		<div class="col-12">
			<label class="visually-hidden" for="bulan">Bulan</label>
			<div class="input-group">
				<div class="input-group-text">Bulan</div>
				<input type="month" class="form-control" id="bulan" name="bulan" placeholder="Pilih Bulan">
			</div>
		</div>

		<div class="col-12">
			<button type="submit" class="btn btn-primary">Tampilkan</button>
		</div>
	</form>

	<!-- Penutup Container -->
</div>
