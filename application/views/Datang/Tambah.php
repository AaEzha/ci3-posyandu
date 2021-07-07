<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Form Penambahan Data Penduduk Datang</h2>
	<hr class="mx-auto" width="50%"><BR>
	<!-- Card -->
	<div class="card">
		<div class="card-body">
			<!-- Sub Card -->
			<div class="row row-cols-2 row-cols-md-3 g-4">
				<!-- Sub Sub Card 1 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA DIRI SUAMI</strong></h5>
							<hr class="mx-auto" width="40%">
							<!-- Form -->
							<form action="" method="post">
								<input type="hidden" class="form-control form-control-sm" name="Id_Datang" value="DTG-<?php echo sprintf("%05s", $Id_Datang) ?>" readonly>
								<!-- Field -->
								<!-- Nama Suami -->
								<div class="mb-3">
									<label for="Nik_Suami">NIK Kepala Keluarga</label>
									<input type="text" name="Nik_Suami" class="form-control form-control-sm" onchange="suami(this.value)">
									<small class="form-text text-danger"><?= form_error('Nik_Suami') ?></small>
								</div>
								<div class="mb-3">
									<label for="Nama_KK">Nama Kepala Keluarga</label>
									<input type="text" name="Nama_KK" id="Nama_KK" class="form-control form-control-sm" readonly>
									<small class="form-text text-danger"><?= form_error('Nama_KK') ?></small>
								</div>
								<!-- Tanggal Lahir KK -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tanggal_Lahir_KK">Tanggal Lahir</label>
											<input type="date" name="Tanggal_Lahir_KK" id="Tanggal_Lahir_KK" class="form-control form-control-sm" readonly>
										</div>
									</div>
									<!-- RW -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur_KK">Umur</label>
											<input type="text" name="Umur_KK" id="Umur_KK" class="form-control form-control-sm" readonly>
											<small class="form-text text-danger"><?= form_error('Umur_KK') ?></small>
										</div>
									</div>
								</div>
								<br>
								<hr>
								<!-- Data Istri -->
								<h5 class="card-title text-center"><strong>DATA DIRI ISTRI</strong></h5>
								<hr class="mx-auto" width="40%">
								<!-- Nama Istri -->
								<div class="mb-3">
									<label for="Nik_Istri">NIK Istri</label>
									<input type="text" name="Nik_Istri" class="form-control form-control-sm" onchange="istri(this.value)">
									<small class="form-text text-danger"><?= form_error('Nik_Istri') ?></small>
								</div>
								<div class="mb-3">
									<label for="Nama_Istri">Nama Istri</label>
									<input type="text" name="Nama_Istri" id="Nama_Istri" class="form-control form-control-sm" readonly>
									<small class="form-text text-danger"><?= form_error('Nama_Istri') ?></small>
								</div>
								<!-- Tanggal Lahir KK -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tgl Istri">Tanggal Lahir</label>
											<input type="date" name="Tanggal_Lahir_Istri" id="Tanggal_Lahir_Istri" class="form-control form-control-sm" readonly>
										</div>
									</div>
									<!-- RW -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur_Istri">Umur</label>
											<input type="text" name="Umur_Istri" id="Umur_Istri" class="form-control form-control-sm" readonly>
											<small class="form-text text-danger"><?= form_error('Umur_Istri') ?></small>
										</div>
									</div>
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
								<label for="Alamat_Datang">Alamat</label>
								<input type="text" name="Alamat_Datang" class="form-control form-control-sm" id="Alamat" value="Jl. Orion" readonly>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Rt_Datang">RT</label>
										<select class="form-select form-select-sm" id="Rt" name="Rt_Datang" id="Rt" aria-label="Default select example">
											<option selected>Pilih RT</option>
											<option value="001">001</option>
											<option value="002">002</option>
											<option value="003">003</option>
											<option value="004">004</option>
											<option value="005">005</option>
										</select>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Rw_Datang">RW</label>
										<input type="text" name="Rw_Datang" class="form-control form-control-sm" value="013" readonly>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="mb-3">
								<label for="Desa_Datang">Desa</label>
								<input type="text" name="Desa_Datang" class="form-control form-control-sm" id="Desa" value="Kertajaya" readonly>
							</div>
							<!-- Kecamatan -->
							<div class="mb-3">
								<label for="Kecamatan">Kecamatan</label>
								<input type="text" name="Kecamatan_Datang" class="form-control form-control-sm" id="Kecamatan" value="Padalarang" readonly>
							</div>
							<!-- Kabupaten -->
							<div class="mb-3">
								<label for="Kabupaten">Kabupaten</label>
								<input type="text" name="Kabupaten_Datang" class="form-control form-control-sm" id="Kabupaten" value="Bandung Barat" readonly>
							</div>
							<!-- Provinsi -->
							<div class="mb-3">
								<label for="Provinsi">Provinsi</label>
								<input type="text" name="Provinsi_Datang" class="form-control form-control-sm" id="Provinsi" value="Jawa Barat" readonly>
							</div>
							<!-- Penutup Div Sub Sub Card 2-->
						</div>
					</div>
				</div>
				<!-- Sub Sub Card 3 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA KELUARGA</strong></h5>
							<hr class="mx-auto" width="40%">
							<!-- Data Aanak -->
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Jumlah_Jiwa_Lk">Jumlah Jiwa LK</label>
										<input type="text" name="Jumlah_Jiwa_Lk" class="form-control" id="Rw">
										<small class="form-text text-danger"><?= form_error('Jumlah_Jiwa_Lk') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Jumlah_Jiwa_Pr">Jumlah Jiwa PR</label>
										<input type="text" name="Jumlah_Jiwa_Pr" class="form-control">
										<small class="form-text text-danger"><?= form_error('Jumlah_Jiwa_Pr') ?></small>
									</div>
								</div>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Jumlah_Anak_Lk">Jumlah Anak LK</label>
										<input type="text" name="Jumlah_Anak_Lk" class="form-control" id="Rw">
										<small class="form-text text-danger"><?= form_error('Jumlah_Anak_Lk') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Jumlah_Anak_Pr">Jumlah Anak PR</label>
										<input type="text" name="Jumlah_Anak_Pr" class="form-control">
										<small class="form-text text-danger"><?= form_error('Jumlah_Anak_Pr') ?></small>
									</div>
								</div>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Kb">KB</label>
										<select class="form-select form-select-sm" id="Rt" name="Kb" id="Rt" aria-label="Default select example">
											<option selected>Pilih</option>
											<option value="Ya">Ya</option>
											<option value="Tidak">Tidak</option>
										</select>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Ks">KS</label>
										<select class="form-select form-select-sm" id="Rt" name="Ks" id="Rt" aria-label="Default select example">
											<option selected>Pilih</option>
											<option value="Ya">Ya</option>
											<option value="Tidak">Tidak</option>
										</select>
									</div>
								</div>
							</div>
							<!-- Button -->
							<br><br><br><br>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end">
								<a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>datang" role="button">Kembali</a>
								<button type="submit" name="tambah" style="background-color:#5894C6" class="btn btn-primary"> Simpan Data </button>
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
