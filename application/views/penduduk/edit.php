<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Form Peubahan Data Penduduk</h2>
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
									<input type="text" name="NIK" class="form-control form-control-sm" id="NIK" value="<?= $data->NIK; ?>">
									<small class="form-text text-danger"><?= form_error('NIK') ?></small>
								</div>
								<div class="mb-3">
									<label for="No_KK">No KK</label>
									<input type="text" name="No_KK" class="form-control form-control-sm" id="No_KK" value="<?= $data->No_KK; ?>">
									<small class="form-text text-danger"><?= form_error('No_KK') ?></small>
								</div>
								<div class="mb-3">
									<label for="Nama">Nama</label>
									<input type="text" name="Nama" class="form-control form-control-sm" id="Nama" value="<?= $data->Nama; ?>">
									<small class="form-text text-danger"><?= form_error('Nama') ?></small>
								</div>
								<div class="mb-3 ">
									<label for="Jenis_Kelamin">Jenis Kelamin</label>
									<select class="form-select form-select-sm" id="Jenis_Kelamin" name="Jenis_Kelamin">
										<option value="" selected>Pilih Jenis Kelamin</option>
										<option value="Laki-Laki" <?=("Laki-Laki"==$data->Jenis_Kelamin) ? "selected":"";?>>Laki-Laki</option>
										<option value="Perempuan" <?=("Perempuan"==$data->Jenis_Kelamin) ? "selected":"";?>>Perempuan</option>
									</select>
									<small class="form-text text-danger"><?= form_error('Jenis_Kelamin') ?></small>
								</div>
								<div class="mb-3">
									<label for="Tempat_Lahir">Tempat Lahir</label>
									<input type="text" name="Tempat_Lahir" class="form-control form-control-sm" id="Tempat_Lahir" value="<?= $data->Tempat_Lahir; ?>">
									<small class="form-text text-danger"><?= form_error('Tempat_Lahir') ?></small>
								</div>
								<div class="mb-3">
									<label for="Tanggal_Lahir">Tanggal Lahir</label>
									<input type="date" name="Tanggal_Lahir" class="form-control form-control-sm" id="Tanggal_Lahir" value="<?= $data->Tanggal_Lahir; ?>">
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
								<input type="text" name="Alamat" class="form-control form-control-sm" id="Alamat"  value="<?= $data->Alamat; ?>">
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Rt">RT</label>
										<input type="text" name="Rt" class="form-control form-control-sm" id="Rt" value="<?= $data->Rt; ?>">
										<small class="form-text text-danger"><?= form_error('Rt') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Rw">RW</label>
										<input type="text" name="Rw" class="form-control form-control-sm" id="Rw" value="<?= $data->Rw; ?>">
										<small class="form-text text-danger"><?= form_error('Rw') ?></small>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="mb-3">
								<label for="Desa">Desa</label>
								<input type="text" name="Desa" class="form-control form-control-sm" id="Desa" value="<?= $data->Desa; ?>">
							</div>
							<!-- Kecamatan -->
							<div class="mb-3">
								<label for="Kecamatan">Kecamatan</label>
								<input type="text" name="Kecamatan" class="form-control form-control-sm" id="Kecamatan" value="<?= $data->Kecamatan; ?>">
							</div>
							<!-- Kabupaten -->
							<div class="mb-3">
								<label for="Kabupaten">Kabupaten</label>
								<input type="text" name="Kabupaten" class="form-control form-control-sm" id="Kabupaten" value="<?= $data->Kabupaten; ?>">
							</div>
							<!-- Provinsi -->
							<div class="mb-3">
								<label for="Provinsi">Provinsi</label>
								<input type="text" name="Provinsi" class="form-control form-control-sm" id="Provinsi" value="<?= $data->Provinsi; ?>">
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
								<input type="text" name="Nama_Ibu" class="form-control form-control-sm" id="Nama_Ibu" value="<?= $data->Nama_Ibu; ?>">
								<small class="form-text text-danger"><?= form_error('Nama_Ibu') ?></small>
							</div>
							<div class="mb-3">
								<label for="Nama_Ayah">Nama Ayah</label>
								<input type="text" name="Nama_Ayah" class="form-control form-control-sm" id="Nama_Ayah" value="<?= $data->Nama_Ayah; ?>">
								<small class="form-text text-danger"><?= form_error('Nama_Ayah') ?></small>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Pekerjaan">Pekerjaan</label>
										<input type="text" name="Pekerjaan" class="form-control form-control-sm" id="Pekerjaan" value="<?= $data->Pekerjaan; ?>">
										<small class="form-text text-danger"><?= form_error('Pekerjaan') ?></small>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="KWN">KWN</label>
										<input type="text" name="KWN" class="form-control form-control-sm" id="KWN"  value="<?= $data->KWN; ?>">
										<small class="form-text text-danger"><?= form_error('KWN') ?></small>
									</div>
								</div>
							</div>
							<div class="mb-3 ">
								<label for="Status_Hubungan">Status Hubungan</label>
								<select class="form-select form-select-sm" id="Status_Hubungan" name="Status_Hubungan">
									<option value="" selected>Pilih Status Hubungan</option>
									<?php foreach($hubungan as $hub): ?>
									<option value="<?=$hub;?>" <?=($hub==$data->Status_Hubungan) ? "selected":"";?>><?=$hub;?></option>
									<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('Status_Hubungan') ?></small>
							</div>
							<div class="mb-3 ">
								<label for="Pendidikan">Pendidikan</label>
								<select class="form-select form-select-sm" id="Pendidikan" name="Pendidikan">
									<option value="" selected>Pilih Pendidikan</option>
									<?php foreach($pendidikan as $hub): ?>
									<option value="<?=$hub;?>" <?=($hub==$data->Pendidikan) ? "selected":"";?>><?=$hub;?></option>
									<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('Pendidikan') ?></small>
							</div>
							<div class="mb-3 ">
								<label for="Agama">Agama</label>
								<select class="form-select form-select-sm" id="Agama" name="Agama">
									<option value="" selected>Pilih Agama</option>
									<?php foreach($agama as $hub): ?>
									<option value="<?=$hub;?>" <?=($hub==$data->Agama) ? "selected":"";?>><?=$hub;?></option>
									<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('Agama') ?></small>
							</div>

							<!-- Button -->
							<div class="d-grid gap-2 d-md-flex justify-content-md-end">
								<a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Penduduk" role="button">Kembali</a>
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
