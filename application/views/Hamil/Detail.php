<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Detail Penambahan Data Ibu Hamil</h2>
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
								<input type="hidden" class="form-control form-control-sm" name="Id_Kehamilan" value="<?= $data['Id_Kehamilan']; ?>" readonly>
								<div class="mb-3">
									<label for="Nik_Suami" class="form-label">NIK Suami</label>
									<input type="text" class="form-control form-control-sm" name="Nik_Suami" onchange="suami(this.value)" step="1" autofocus value="<?= $data['Nik_Suami']; ?>">
									<small class="form-text text-danger"><?= form_error('Nik_Suami') ?></small>
								</div>
								<!-- Nama Suami -->
								<div class="mb-3">
									<label for="Nama_Suami" class="form-label">Nama Suami</label>
									<input type="text" class="form-control form-control-sm" name="Nama_Suami" id="Nama_Suami" readonly value="<?= $data['Nama_Suami']; ?>">
									<small class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
								</div>
								<!-- Tanggal Lahir -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tanggal_Lahir_Suami">Tanggal Lahir</label>
											<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Suami" id="Tanggal_Lahir_Suami" readonly value="<?= $data['Tanggal_Lahir_Suami']; ?>">
										</div>
									</div>
									<!-- Umur -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur_Suami"> Umur</label>
											<input type="text" name="Umur_Suami" class="form-control form-control-sm" id="Umur_Suami" readonly value="<?= $data['Umur_Suami']; ?>">
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
								<input type="text" class="form-control form-control-sm" name="Nik_Istri" onchange="istri(this.value)" step="2" value="<?= $data['Nik_Istri']; ?>">
								<small class="form-text text-danger"><?= form_error('Nik_Istri') ?></small>
							</div>
							<!-- Nama Istri -->
							<div class="mb-3">
								<label for="Nama_Istri" class="form-label">Nama Istri</label>
								<input type="text" class="form-control form-control-sm" name="Nama_Istri" id="Nama_Istri" readonly value="<?= $data['Nama_Istri']; ?>">
								<small class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
							</div>
							<!-- Tanggal Lahir -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Tanggal_Lahir_Istri">Tanggal Lahir</label>
										<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Istri" id="Tanggal_Lahir_Istri" readonly value="<?= $data['Tanggal_Lahir_Istri']; ?>">
									</div>
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Umur_Istri"> Umur</label>
										<input type="text" name="Umur_Istri" class="form-control form-control-sm" id="Umur_Istri" readonly value="<?= $data['Umur_Istri']; ?>">
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
								<input type="text" class="form-control form-control-sm" name="Hamil_Ke" id="Hamil_Ke" value="<?= $data['Hamil_Ke']; ?>">
								<small class="form-text text-danger"><?= form_error('Hamil_Ke') ?></small>
							</div>
							<!-- Tanggal Lahir -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Tanggal_Daftar">Tanggal Daftar</label>
										<input type="date" class="form-control form-control-sm" name="Tanggal_Daftar" id="Tanggal_Daftar" value="<?= $data['Tanggal_Daftar']; ?>">
										<small class="form-text text-danger"><?= form_error('Tanggal_Daftar') ?></small>
									</div>
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Umur_Hamil_Daftar"> Umur Kehamilan</label>
										<input type="text" name="Umur_Hamil_Daftar" class="form-control form-control-sm" id="Umur_Hamil_Daftar" value="<?= $data['Umur_Hamil_Daftar']; ?>">
										<small class="form-text text-danger"><?= form_error('Umur_Hamil_Daftar') ?></small>
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
						<h6 class="card-title text-center">DATA ALAMAT</h6>
						<hr class="mx-auto" width="40%">
						<!-- Nama Suami -->
						<div class="mb-3">
							<label for="Alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control form-control-sm" name="Alamat" id="Alamat" readonly value="<?= $data['Alamat']; ?>">
							<small class="form-text text-danger"><?= form_error('Alamat') ?></small>
						</div>
						<!-- RT -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="RT ">RT</label>
									<input type="text" class="form-control form-control-sm" name="Rt" id="Rt" readonly value="<?= $data['Rt']; ?>">
									<small class="form-text text-danger"><?= form_error('Rt') ?></small>
								</div>
							</div>
							<!-- RW -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="RW"> RW</label>
									<input type="text" name="Rw" class="form-control form-control-sm" id="Rw" readonly value="<?= $data['Rw']; ?>">
									<small class="form-text text-danger"><?= form_error('Rw') ?></small>
								</div>
							</div>
						</div>
						<!-- Desa -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="Desa ">Desa</label>
									<input type="text" class="form-control form-control-sm" name="Desa" id="Desa" readonly value="<?= $data['Desa']; ?>">
									<small class="form-text text-danger"><?= form_error('Desa') ?></small>
								</div>
							</div>
							<!-- Pekerjaan -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="Kecamatan"> Kecamatan </label>
									<input type="text" name="Kecamatan" class="form-control form-control-sm" id="Kecamatan" readonly value="<?= $data['Kecamatan']; ?>">
									<small class="form-text text-danger"><?= form_error('Kecamatan') ?></small>
								</div>
							</div>
						</div>
						<!-- Desa -->
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3 ">
									<label for="Kabupaten ">Kabupaten/Kota</label>
									<input type="text" class="form-control form-control-sm" name="Kabupaten" id="Kabupaten" readonly value="<?= $data['Kabupaten']; ?>">
									<small class="form-text text-danger"><?= form_error('Kabupaten') ?></small>
								</div>
							</div>
							<!-- Pekerjaan -->
							<div class="col-md-6">
								<div class="mb-3">
									<label for="Provinsi"> Provinsi </label>
									<input type="text" name="Provinsi" class="form-control form-control-sm" id="Provinsi" readonly value="<?= $data['Provinsi']; ?>">
									<small class="form-text text-danger"><?= form_error('Provinsi') ?></small>
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
			<a class="btn md-end " style="background-color:#B1C695" href="<?= base_url(); ?>Hamil" role="button">Kembali</a>
		</div>
		<!-- Penutup Card 1 -->
	</div>
</div><br>
</form>

<!--Penutup Div -->
</div>
<br><br><br><br>
