<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Detail Data Penduduk</h2>
	<hr class="mx-auto" width="35%"><BR>
	<!-- Card -->
	<div class="card">
		<div class="card-body">
			<!-- Sub Card -->
			<div class="row row-cols-2 row-cols-md-3 g-4">
				<!-- Sub Sub Card 1 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA DIRI</strong></h5>
							<hr class="mx-auto" width="40%">
							<!-- Form -->
							<form action="" method="post">
								<!-- Field -->
								<div class="mb-3">
									<label for="NIK">NIK</label>
									<input type="text" value="<?= $data->NIK; ?>" class="form-control form-control-sm" id="NIK" readonly>
									<small class="form-text text-danger"><?= form_error('NIK') ?></small>
								</div>
								<div class="mb-3">
									<label for="No_KK">No KK</label>
									<input type="text" value="<?= $data->No_KK; ?>" class="form-control form-control-sm" id="No_KK" readonly>
									<small class="form-text text-danger"><?= form_error('No_KK') ?></small>
								</div>
								<div class="mb-3">
									<label for="Nama">Nama</label>
									<input type="text" value="<?= $data->Nama; ?>" class="form-control form-control-sm" id="Nama" readonly>
									<small class="form-text text-danger"><?= form_error('Nama') ?></small>
								</div>
								<div class="mb-3 ">
									<label for="Jenis_Kelamin">Jenis Kelamin</label>
									<input type="text" value="<?= $data->Jenis_Kelamin; ?>" class="form-control form-control-sm" id="Jenis_Kelamin" readonly>
									<small class="form-text text-danger"><?= form_error('Jenis_Kelamin') ?></small>
								</div>
								<div class="mb-3">
									<label for="Tempat_Lahir">Tempat Lahir</label>
									<input type="text" value="<?= $data->Tempat_Lahir; ?>" class="form-control form-control-sm" id="Tempat_Lahir" readonly>
									<small class="form-text text-danger"><?= form_error('Tempat_Lahir') ?></small>
								</div>
								<div class="mb-3">
									<label for="Tanggal_Lahir">Tanggal Lahir</label>
									<input type="date" value="<?= $data->Tanggal_Lahir; ?>" class="form-control form-control-sm" id="Tanggal_Lahir" readonly>
									<small class="form-text text-danger"><?= form_error('Tanggal_Lahir') ?></small>
								</div>
								<!-- Penutup Div Sub Sub Card 1 -->
						</div>
					</div>
				</div>
				<!-- Sub Sub Card 2 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA ALAMAT</strong></h5>
							<hr class="mx-auto" width="40%">
							<!-- Data Alamat -->
							<!-- Alamat -->
							<div class="mb-3">
								<label for="Alamat">Alamat</label>
								<input type="text" value="<?= $data->Alamat; ?>" class="form-control form-control-sm" id="Alamat" readonly>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Rt">RT</label>
										<input type="text" value="<?= $data->Rt; ?>" class="form-control form-control-sm" id="Rt" readonly>
										<small class="form-text text-danger"><?= form_error('Rt') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Rw">RW</label>
										<input type="text" value="<?= $data->Rw; ?>" class="form-control form-control-sm" id="Rw" readonly>
										<small class="form-text text-danger"><?= form_error('Rw') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="mb-3">
								<label for="Desa">Desa</label>
								<input type="text" value="<?= $data->Desa; ?>" class="form-control form-control-sm" id="Desa" readonly>
							</div>
							<!-- Kecamatan -->
							<div class="mb-3">
								<label for="Kecamatan">Kecamatan</label>
								<input type="text" value="<?= $data->Kecamatan; ?>" class="form-control form-control-sm" id="Kecamatan" readonly>
							</div>
							<!-- Kabupaten -->
							<div class="mb-3">
								<label for="Kabupaten">Kabupaten</label>
								<input type="text" value="<?= $data->Kabupaten; ?>" class="form-control form-control-sm" id="Kabupaten" readonly>
							</div>
							<!-- Provinsi -->
							<div class="mb-3">
								<label for="Provinsi">Provinsi</label>
								<input type="text" value="<?= $data->Provinsi; ?>" class="form-control form-control-sm" id="Provinsi" readonly>
							</div>
							<!-- Penutup Div Sub Sub Card 2-->
						</div>
					</div>
				</div>
				<!-- Sub Sub Card 3 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA LAIN</strong></h5>
							<hr class="mx-auto" width="40%">
							<div class="mb-3">
								<label for="Nama_Ibu">Nama Ibu</label>
								<input type="text" value="<?= $data->Nama_Ibu; ?>" class="form-control form-control-sm" id="Nama_Ibu" readonly>
								<small class="form-text text-danger"><?= form_error('Nama_Ibu') ?></small>
							</div>
							<div class="mb-3">
								<label for="Nama_Ayah">Nama Ayah</label>
								<input type="text" value="<?= $data->Nama_Ayah; ?>" class="form-control form-control-sm" id="Nama_Ayah" readonly>
								<small class="form-text text-danger"><?= form_error('Nama_Ayah') ?></small>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Pekerjaan">Pekerjaan</label>
										<input type="text" value="<?= $data->Pekerjaan; ?>" class="form-control form-control-sm" id="Pekerjaan" readonly>
										<small class="form-text text-danger"><?= form_error('Pekerjaan') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="KWN">KWN</label>
										<input type="text" value="<?= $data->KWN; ?>" class="form-control form-control-sm" id="KWN" value="WNI" readonly>
										<small class="form-text text-danger"><?= form_error('KWN') ?></small>
									</div>
								</div>
							</div>
							<div class="mb-3 ">
								<label for="Status_Hubungan">Status Hubungan</label>
								<input type="text" value="<?= $data->Status_Hubungan; ?>" class="form-control form-control-sm" id="Nama_Ibu" readonly>
								<small class="form-text text-danger"><?= form_error('Status_Hubungan') ?></small>
							</div>
							<div class="mb-3 ">
								<label for="Pendidikan">Pendidikan</label>
								<input type="text" value="<?= $data->Pendidikan; ?>" class="form-control form-control-sm" id="Nama_Ibu" readonly>
								<small class="form-text text-danger"><?= form_error('Pendidikan') ?></small>
							</div>
							<div class="mb-3 ">
								<label for="Agama">Agama</label>
								<input type="text" value="<?= $data->Agama; ?>" class="form-control form-control-sm" id="Nama_Ibu" readonly>
								<small class="form-text text-danger"><?= form_error('Agama') ?></small>
							</div>

							<!-- Button -->
							<div class="d-grid gap-2 d-md-flex justify-content-md-end">
								<a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Penduduk" role="button">Kembali</a>
							</div>
							<!-- Penutup Sub Sub Card 3 -->
						</div>
					</div>
				</div>
				<!-- Penutup Sub Card -->
			</div>
			</form>
			<!-- Penutup Card -->
		</div>
	</div>
	<!--Penutup Div -->
</div>
<br><br><br><br>
