<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Detail Data Perkawinan</h2>
	<hr class="mx-auto" width="35%"><BR>

	<!-- Card 1 -->
	<div class="card mx-auto" style="width: 50rem;">
		<div class="card-body">
			<h5 class="card-title text-center"><strong>DATA SUAMI</strong></h5>
			<hr class="mx-auto" width="20%">
			<!-- Sub Card 1 -->
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="card-title text-center">DATA DIRI SUAMI</h6>
							<hr class="mx-auto" width="40%">
							<!-- Form Pembuka -->
							<!-- Nama Suami -->
							<div class="mb-3">
								<label for="Nama Suami" class="form-label">Nama Suami</label>
								<input type="text" class="form-control form-control-sm" name="Nama_Suami" id="Nama_Suami" value="<?= $data->Nama_Suami; ?>" readonly>
								<small class="form-text text-danger"><?= form_error('Nama_Suami') ?></small>
							</div>
							<!-- Tanggal Lahir -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Tanggal Lahir">Tanggal Lahir</label>
										<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Suami" id="Tanggal_Lahir_Suami" value="<?= $data->Tanggal_Lahir_Suami; ?>" readonly>
									</div>
								</div>
								<!-- Umur -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Umur Suami"> Umur</label>
										<input type="text" name="Umur_Suami" class="form-control form-control-sm" id="Umur_Suami" value="<?= $data->Umur_Suami; ?>" readonly>
										<small class="form-text text-danger"><?= form_error('Umur_Suami') ?></small>
									</div>
								</div>
							</div>
							<!-- Pendidikan -->
							<div class="mb-3 ">
								<label for="Pendidikan ">Pendidikan</label>
								<input type="text" name="Pendidikan_Suami" class="form-control form-control-sm" id="Pendidikan_Suami" value="<?= $data->Pendidikan_Suami; ?>" readonly>
								<small class="form-text text-danger"><?= form_error('Pendidikan_Suami') ?></small>
							</div>
							<!-- Pekerjaan -->
							<div class="mb-3">
								<label for="Pekerjaan"> Pekerjaan</label>
								<input type="text" name="Pekerjaan_Suami" class="form-control form-control-sm" id="Pekerjaan_Suami" value="<?= $data->Pekerjaan_Suami; ?>" readonly>
								<small class="form-text text-danger"><?= form_error('Pekerjaan_Suami') ?></small>
							</div>
							<!-- Penutup Sub car 1 -->
						</div>
					</div>
				</div>
				<!-- Sub Card 2 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="card-title text-center">DATA ALAMAT SUAMI</h6>
							<hr class="mx-auto" width="40%">
							<!-- Nama Suami -->
							<div class="mb-3">
								<label for="Alamat" class="form-label">Alamat</label>
								<input type="text" class="form-control form-control-sm" name="Alamat_Suami" id="Alamat_Suami" readonly value="<?= $data->Alamat_Suami; ?>">
								<small class="form-text text-danger"><?= form_error('Alamat_Suami') ?></small>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="RT ">RT</label>
										<input type="text" class="form-control form-control-sm" name="Rt_Suami" id="Rt_Suami" readonly value="<?= $data->Rt_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Rt_Suami') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="RW"> RW</label>
										<input type="text" name="Rw_Suami" class="form-control form-control-sm" id="Rw_Suami" readonly value="<?= $data->Rw_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Rw_Suami') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Desa ">Desa</label>
										<input type="text" class="form-control form-control-sm" name="Desa_Suami" id="Desa_Suami" readonly value="<?= $data->Desa_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Desa_Suami') ?></small>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Kecamatan"> Kecamatan </label>
										<input type="text" name="Kecamatan_Suami" class="form-control form-control-sm" id="Kecamatan_Suami" readonly value="<?= $data->Kecamatan_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Kecamatan_Suami') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Kabupaten ">Kabupaten/Kota</label>
										<input type="text" class="form-control form-control-sm" name="Kabupaten_Suami" id="Kabupaten_Suami" readonly value="<?= $data->Kabupaten_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Kabupaten_Suami') ?></small>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Provinsi"> Provinsi </label>
										<input type="text" name="Provinsi_Suami" class="form-control form-control-sm" id="Provinsi_Suami" readonly value="<?= $data->Provinsi_Suami; ?>">
										<small class="form-text text-danger"><?= form_error('Provinsi_Suami') ?></small>
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

			<h5 class="card-title text-center"><strong>DATA ISTRI</strong></h5>
			<hr class="mx-auto" width="20%">
			<!-- Sub Card 1 -->
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h6 class="card-title text-center">DATA DIRI ISTRI</h6>
							<hr class="mx-auto" width="40%">
							<!-- Form Pembuka -->
							<form action="" method="post">
								<!-- Nama Suami -->
								<div class="mb-3">
									<label for="Nama_Istri" class="form-label">Nama Istri</label>
									<input type="text" class="form-control form-control-sm" name="Nama_Istri" id="Nama_Istri" readonly value="<?= $data->Nama_Istri; ?>">
									<small class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
								</div>
								<!-- Tanggal Lahir -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tanggal Lahir">Tanggal Lahir</label>
											<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir_Istri" id="Tanggal_Lahir_Istri" readonly value="<?= $data->Tanggal_Lahir_Istri; ?>">
										</div>
									</div>
									<!-- Umur -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur Istri"> Umur</label>
											<input type="text" name="Umur_Istri" class="form-control form-control-sm" id="Umur_Istri" readonly value="<?= $data->Umur_Istri; ?>">
											<small class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
										</div>
									</div>
								</div>
								<!-- Pendidikan -->
								<div class="mb-3 ">
									<label for="Pendidikan ">Pendidikan</label>
									<input type="text" name="Pendidikan_Istri" class="form-control form-control-sm" id="Pendidikan_Istri" readonly value="<?= $data->Pendidikan_Istri; ?>">
									<small class="form-text text-danger"><?= form_error('Pendidikan_Istri') ?></small>
								</div>
								<!-- Pekerjaan -->
								<div class="mb-3">
									<label for="Pekerjaan"> Pekerjaan</label>
									<input type="text" name="Pekerjaan_Istri" class="form-control form-control-sm" id="Pekerjaan_Istri" readonly value="<?= $data->Pekerjaan_Istri; ?>">
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
							<h6 class="card-title text-center">DATA ALAMAT ISTRI</h6>
							<hr class="mx-auto" width="40%">
							<!-- Nama Suami -->
							<div class="mb-3">
								<label for="Alamat" class="form-label">Alamat</label>
								<input type="text" class="form-control form-control-sm" name="Alamat_Istri" id="Alamat_Istri" readonly value="<?= $data->Alamat_Istri; ?>">
								<small class="form-text text-danger"><?= form_error('Alamat_Istri') ?></small>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="RT ">RT</label>
										<input type="text" class="form-control form-control-sm" name="Rt_Istri" id="Rt_Istri" readonly value="<?= $data->Rt_Istri; ?>">
										<small class="form-text text-danger"><?= form_error('Rt_Istri') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="RW"> RW</label>
										<input type="text" name="Rw_Istri" class="form-control form-control-sm" id="Rw_Istri" readonly value="<?= $data->Rw_Istri; ?>">
										<small class="form-text text-danger"><?= form_error('Rw_Istri') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Desa ">Desa</label>
										<input type="text" class="form-control form-control-sm" name="Desa_Istri" id="Desa_Istri" readonly value="<?= $data->Desa_Istri; ?>">
										<small class="form-text text-danger"><?= form_error('Desa_Istri') ?></small>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Kecamatan"> Kecamatan </label>
										<input type="text" name="Kecamatan_Istri" class="form-control form-control-sm" id="Kecamatan_Istri" readonly value="<?= $data->Kecamatan_Istri; ?>">
										<small class="form-text text-danger"><?= form_error('Kecamatan_Istri') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Kabupaten ">Kabupaten/Kota</label>
										<input type="text" class="form-control form-control-sm" name="Kabupaten_Istri" id="Kabupaten_Istri" readonly value="<?= $data->Kabupaten_Istri; ?>">
										<small class="form-text text-danger"><?= form_error('Kabupaten_Istri') ?></small>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Provinsi"> Provinsi </label>
										<input type="text" name="Provinsi_Istri" class="form-control form-control-sm" id="Provinsi_Istri" readonly value="<?= $data->Provinsi_Istri; ?>">
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
			</div>
			<!-- Penutup Card 1 -->
		</div>
	</div><br>

	<!--Penutup Div -->
</div>
<br><br><br><br>
