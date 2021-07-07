<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Form Penambahan Data Ibu Hamil</h2>
	<hr class="mx-auto" width="35%"><BR>

	<!-- Card 1 -->
	<div class="card mx-auto" style="width: 50rem;">
		<div class="card-body">
			<h5 class="card-title text-center"><strong>DATA ORANG TUA</strong></h5>
			<hr class="mx-auto" width="20%">
			<!-- Sub Card 1 -->
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="card-title text-center">DATA DIRI SUAMI</h6>
							<hr class="mx-auto" width="40%">
							<!-- Form Pembuka -->
							<form action="" method="post">
								<input type="hidden" class="form-control form-control-sm" name="Id_Kehamilan" value="HML-<?php echo sprintf("%05s", $Id_Kehamilan) ?>" readonly>
								<div class="mb-3">
									<label for="Nik_Suami" class="form-label">NIK Suami</label>
									<input type="text" class="form-control form-control-sm" name="Nik_Suami" onchange="suami(this.value)" step="1" autofocus>
									<small class="form-text text-danger"><?= form_error('Nik_Suami') ?></small>
								</div>
								<!-- Nama Suami -->
								<div class="mb-3">
									<label for="Nama_Suami" class="form-label">Nama Suami</label>
									<input type="text" class="form-control form-control-sm" name="Nama_Suami" id="Nama_Suami" readonly>
									<small class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
								</div>
								<!-- Tanggal Lahir -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tanggal_Lahir_Suami">Tanggal Lahir</label>
											<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Suami" id="Tanggal_Lahir_Suami" readonly>
										</div>
									</div>
									<!-- Umur -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur_Suami"> Umur</label>
											<input type="text" name="Umur_Suami" class="form-control form-control-sm" id="Umur_Suami" readonly>
											<small class="form-text text-danger"><?= form_error('Umur_Suami') ?></small>
										</div>
									</div>
								</div>
								<!-- Penutup Sub car 1 -->
						</div>
					</div>
				</div>
				<!-- Sub Card 2 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="card-title text-center">DATA DIRI ISTRI</h6>
							<hr class="mx-auto" width="40%">
							<div class="mb-3">
								<label for="Nik_Istri" class="form-label">NIK Istri</label>
								<input type="text" class="form-control form-control-sm" name="Nik_Istri" onchange="istri(this.value)" step="2">
								<small class="form-text text-danger"><?= form_error('Nik_Istri') ?></small>
							</div>
							<!-- Nama Istri -->
							<div class="mb-3">
								<label for="Nama_Istri" class="form-label">Nama Istri</label>
								<input type="text" class="form-control form-control-sm" name="Nama_Istri" id="Nama_Istri" readonly>
								<small class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
							</div>
							<!-- Tanggal Lahir -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Tanggal_Lahir_Istri">Tanggal Lahir</label>
										<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Istri" id="Tanggal_Lahir_Istri" readonly>
									</div>
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Umur_Istri"> Umur</label>
										<input type="text" name="Umur_Istri" class="form-control form-control-sm" id="Umur_Istri" readonly>
										<small class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
									</div>
								</div>
							</div>
						</div>
						<!-- Penutup Sub Card 1-->
					</div>
				</div>
			</div>
			<!-- Penutup Sub Card -->
		</div><br>
		<hr>

		<h5 class="card-title text-center"><strong>DATA KEHAMILAN</strong></h5>
		<hr class="mx-auto" width="20%">
		<!-- Sub Card 1 -->
		<div class="row row-cols-1 row-cols-md-2 g-4">
			<div class="col">
				<div class="card h-100">
					<div class="card-body">
						<h6 class="card-title text-center">DATA ANAK</h6>
						<hr class="mx-auto" width="40%">
						<!-- Form Pembuka -->
						<form action="" method="post">
							<!-- Nama Suami -->
							<div class="mb-3">
								<label for="Hamil_Ke" class="form-label">Hamil Ke-</label>
								<input type="text" class="form-control form-control-sm" name="Hamil_Ke" id="Hamil_Ke">
								<small class="form-text text-danger"><?= form_error('Hamil_Ke') ?></small>
							</div>
							<!-- Tanggal Lahir -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Tanggal_Daftar">Tanggal Lahir</label>
										<input type="date" class="form-control form-control-sm" name="Tanggal_Daftar" id="Tanggal_Daftar">
									</div>
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Umur_Hamil_Daftar"> Umur</label>
										<input type="text" name="Umur_Hamil_Daftar" class="form-control form-control-sm" id="Umur_Hamil_Daftar">
										<small class="form-text text-danger"><?= form_error('Umur_Hamil_Daftar') ?></small>
									</div>
								</div>
							</div>
							<!-- Pendidikan -->
							<div class="mb-3 ">
								<label for="Pendidikan ">Pendidikan</label>
								<input type="text" name="Pendidikan_Istri" class="form-control form-control-sm" id="Pendidikan_Istri">
								<small class="form-text text-danger"><?= form_error('Pendidikan_Istri') ?></small>
							</div>
							<!-- Pekerjaan -->
							<div class="mb-3">
								<label for="Pekerjaan"> Pekerjaan</label>
								<input type="text" name="Pekerjaan_Istri" class="form-control form-control-sm" id="Pekerjaan_Istri">
								<small class="form-text text-danger"><?= form_error('Pekerjaan_Istri') ?></small>
							</div>
							<!-- Penutup Sub car 1 -->
					</div>
				</div>
			</div>
			<!-- Sub Card 2 -->
			<div class="col">
				<div class="card h-100">
					<div class="card-body">
						<h6 class="card-title text-center">DATA ALAMAT</h6>
						<hr class="mx-auto" width="40%">
						<!-- Nama Suami -->
						<div class="mb-3">
							<label for="Alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control form-control-sm" name="Alamat_Istri" id="Alamat_Istri" readonly>
							<small class="form-text text-danger"><?= form_error('Alamat_Istri') ?></small>
						</div>
						<!-- RT -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="RT ">RT</label>
									<input type="text" class="form-control form-control-sm" name="Rt_Istri" id="Rt_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Rt_Istri') ?></small>
								</div>
							</div>
							<!-- RW -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="RW"> RW</label>
									<input type="text" name="Rw_Istri" class="form-control form-control-sm" id="Rw_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Rw_Istri') ?></small>
								</div>
							</div>
						</div>
						<!-- Desa -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="Desa ">Desa</label>
									<input type="text" class="form-control form-control-sm" name="Desa_Istri" id="Desa_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Desa_Istri') ?></small>
								</div>
							</div>
							<!-- Pekerjaan -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="Kecamatan"> Kecamatan </label>
									<input type="text" name="Kecamatan_Istri" class="form-control form-control-sm" id="Kecamatan_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Kecamatan_Istri') ?></small>
								</div>
							</div>
						</div>
						<!-- Desa -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="Kabupaten ">Kabupaten/Kota</label>
									<input type="text" class="form-control form-control-sm" name="Kabupaten_Istri" id="Kabupaten_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Kabupaten_Istri') ?></small>
								</div>
							</div>
							<!-- Pekerjaan -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="Provinsi"> Provinsi </label>
									<input type="text" name="Provinsi_Istri" class="form-control form-control-sm" id="Provinsi_Istri" readonly>
									<small class="form-text text-danger"><?= form_error('Provinsi_Istri') ?></small>
								</div>
							</div>
						</div>
						<!-- Penutup Sub Card 1-->
					</div>
				</div>
			</div>
			<!-- Penutup Sub Card -->
		</div><br><br>
		<!-- Button -->
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<a class="btn md-end " style="background-color:#B1C695" href="<?= base_url(); ?>Kawin" role="button">Kembali</a>
			<button type="submit" name="tambah" style="background-color:#5894C6" class="btn md-end text-white"> Simpan Data </button>
		</div>
		<!-- Penutup Card 1 -->
	</div>
</div><br>
</form>

<!--Penutup Div -->
</div>
<br><br><br><br>