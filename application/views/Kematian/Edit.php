<!-- Container -->
<div class="container"><br>
	<h2 class="text-center"> Form Penambahan Data Melahirkan</h2>
	<hr class="mx-auto" width="35%"><BR>
	<!-- Card -->
	<div class="card">
		<div class="card-body">
			<!-- Sub Card -->
			<div class="row row-cols-2 row-cols-md-2 g-4">
				<!-- Sub Sub Card 1 -->
				<div class="col">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-center"><strong>DATA YANG MENINGGAL</strong></h5>
							<hr class="mx-auto" width="40%">
							<!-- Form -->
							<form action="" method="post">
								<input type="hidden" class="form-control form-control-sm" name="Id_Kematian" value="<?=$data->Id_Kematian;?>" readonly>
								<!-- Field -->
								<!-- Nama Suami -->
								<div class="mb-3">
									<label for="Nama">Nama Yang Meninggal</label>
									<input type="text" name="Nama_Meninggal" id="Nama_Meninggal" class="form-control form-control-sm" value="<?=$data->Nama_Meninggal;?>" readonly>
									<small class="form-text text-danger"><?= form_error('Nama_Meninggal') ?></small>
								</div>
								<!-- Tanggal Lahir -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tgl lahir ">Tanggal Lahir</label>
											<input type="date" class="form-control form-control-sm" name="Tanggal_Lahir" id="Tanggal_Lahir" value="<?=$data->Tanggal_Lahir;?>" readonly>
										</div>
									</div>
									<!-- RW -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Umur"> Umur</label>
											<input type="text" name="Umur" id="Umur" class="form-control form-control-sm" readonly  value="<?=$data->Umur;?>">
											<small class="form-text text-danger"><?= form_error('Umur') ?></small>
										</div>
									</div>
								</div>
								<!-- JK -->
								<div class="mb-3">
									<label for="Jenis_Kelamin">Jenis Kelamin</label>
									<input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control form-control-sm" readonly  value="<?=$data->Jenis_Kelamin;?>">
									<!-- <select class="form-select form-select-sm" id="Rt" name="Jenis_Kelamin" id="Rt" aria-label="Default select example">
										<option selected>Pilih Jenis Kelamin</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select> -->
								</div>
								<!-- Tgl Meninggal -->
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3 ">
											<label for="Tgl Meninggal ">Tanggal Meninggal</label>
											<input type="date" class="form-control form-control-sm" name="Tanggal_Meninggal"  value="<?=$data->Tanggal_Meninggal;?>">
										</div>
									</div>
									<!-- RW -->
									<div class="col-md-6">
										<div class="mb-3">
											<label for="Penyebab">Penyebab</label>
											<input type="text" name="Penyebab" class="form-control form-control-sm"  value="<?=$data->Penyebab;?>">
											<small class="form-text text-danger"><?= form_error('Penyebab') ?></small>
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
							<!-- Nama Suami -->
							<div class="mb-3">
								<label for="Alamat" class="form-label">Alamat</label>
								<input type="text" class="form-control form-control-sm" name="Alamat" value="Jl. Orion" readonly>
							</div>
							<!-- RT -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="RT ">RT</label>
										<select class="form-select form-select-sm" id="Rt" name="Rt">
											<option selected>Pilih RT</option>
											<option value="001" <?=($data['Rt'] == "001")?"selected":"";?>>001</option>
											<option value="002" <?=($data['Rt'] == "002")?"selected":"";?>>002</option>
											<option value="003" <?=($data['Rt'] == "003")?"selected":"";?>>003</option>
											<option value="004" <?=($data['Rt'] == "004")?"selected":"";?>>004</option>
											<option value="005" <?=($data['Rt'] == "005")?"selected":"";?>>005</option>
										</select>
									</div>
								</div>
								<!-- RW -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="RW"> RW</label>
										<input type="text" name="Rw" class="form-control form-control-sm" value="013" readonly>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Desa ">Desa</label>
										<input type="text" class="form-control form-control-sm" name="Desa" value="Kertajaya" readonly>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Kecamatan"> Kecamatan </label>
										<input type="text" name="Kecamatan" class="form-control form-control-sm" value="Padalarang" readonly>
									</div>
								</div>
							</div>
							<!-- Desa -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 ">
										<label for="Kabupaten ">Kabupaten/Kota</label>
										<input type="text" class="form-control form-control-sm" name="Kabupaten" value="Bandung Barat" readonly>
									</div>
								</div>
								<!-- Pekerjaan -->
								<div class="col-md-6">
									<div class="mb-3">
										<label for="Provinsi"> Provinsi </label>
										<input type="text" name="Provinsi" class="form-control form-control-sm" value="Jawa Barat" readonly>
									</div>
								</div>
							</div>
							<!-- Penutup Div Sub Sub Card 2-->
						</div>
					</div>
				</div>

				<!-- Penutup Sub Card -->
			</div>
			<!-- Button -->
			<br>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<a class="btn " style="background-color:#B1C695" href="<?= base_url(); ?>Kematian" role="button">Kembali</a>
				<button type="submit" name="tambah" style="background-color:#5894C6" class="btn btn-primary"> Simpan Data </button>
			</div>
			</form>
			<!-- Penutup Card -->
		</div>
	</div>
	<!--Penutup Div -->
</div>
<br><br><br><br>
