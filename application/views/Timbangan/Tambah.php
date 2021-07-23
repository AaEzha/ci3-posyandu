<!-- Container -->
<div class="container">
	<br>

	<!-- Text -->
	<h2 class="text-center"> Tambah Data Pengecekan Anak dan Balita<br>Khusus Warga Asli RW.013</h2>
	<hr class="mx-auto" width="50%"><BR>

	<!-- Card -->
	<div class="row row-cols-1 row-cols-md-2 g-2">
		<div class="col">
			<div class="card h-100">
				<div class="card-body">
					<!-- Text Form -->
					<h4 class="card-title text-center">Form Penambahan Data Pengecekan Anak dan Balita</h4>
					<hr>
					<!-- Form -->
					<form action="" method="post">
						<input type="hidden" class="form-control" name="Id_Timbangan" value="Timbang-<?php echo sprintf("%05s", $id) ?>" readonly>
						<input type="hidden" class="form-control" name="NIK" value="<?=$anak->NIK;?>" readonly>

						<!-- Field -->

						<div class="mb-3">
							<label for="nama">Nama Anak</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $anak->Nama_Anak; ?>" readonly>
							<small class="form-text text-danger"><?= form_error('nama') ?></small>
						</div>

						<div class="mb-3">
							<label for="umur">Umur Anak</label>
							<input type="text" name="umur" class="form-control" id="umur" value="<?= umur($anak->Tanggal_Lahir, 'hari'); ?>" readonly>
							<small class="form-text text-danger"><?= form_error('umur') ?></small>
						</div>

						<div class="mb-3">
							<label for="Berat_Badan">Berat Badan (gram)</label>
							<input type="text" name="Berat_Badan" class="form-control" id="Berat_Badan" placeholder="Berat Badan dalam satuan gram, misalnya : 1200 (artinya 1,2 kg)">
							<small class="form-text text-danger"><?= form_error('Berat_Badan') ?></small>
						</div>

						<div class="mb-3">
							<label for="Tinggi_Badan">Tinggi Badan (cm)</label>
							<input type="text" name="Tinggi_Badan" class="form-control" id="Tinggi_Badan" placeholder="Berat Badan dalam satuan cm, misalnya : 150 (artinya 1,5 m)">
							<small class="form-text text-danger"><?= form_error('Tinggi_Badan') ?></small>
						</div>

						<div class="mb-3">
							<label for="Tanggal_Timbang">Tanggal Timbang</label>
							<input type="date" name="Tanggal_Timbang" class="form-control" id="Tanggal_Timbang">
							<small class="form-text text-danger"><?= form_error('Tanggal_Timbang') ?></small>
						</div>

						<div class="mb-3">
							<label for="Id_Vitamin">Vitamin</label>
								<select class="form-control" name="Id_Vitamin" id="Id_Vitamin">
									<option value="">Pilih Vitamin</option>
									<?php foreach($vitamin as $v): ?>
									<option value="<?=$v->Id_Vitamin;?>"><?=$v->Nama_Vitamin;?></option>
									<?php endforeach; ?>
								</select>
							<small class="form-text text-danger"><?= form_error('Id_Vitamin') ?></small>
						</div>

						<div class="mb-3">
							<label for="Id_Vaksin">Vaksin</label>
								<select class="form-control" name="Id_Vaksin" id="Id_Vaksin">
									<option value="">Pilih Vaksin</option>
									<?php foreach($vaksin as $v): ?>
									<option value="<?=$v->Id_Vaksin;?>"><?=$v->Nama_Vaksin;?></option>
									<?php endforeach; ?>
								</select>
							<small class="form-text text-danger"><?= form_error('Id_Vaksin') ?></small>
						</div>


						<!-- Button -->
						<br><br><br>
						<div class="d-grid gap-2 d-md-flex justify-content-md-end">
							<a class="btn " style="background-color:#B1C695" href="<?=base_url('timbangan');?>" role="button">Kembali</a>
							<button type="submit" style="background-color:#5894C6" name="tambah" class="btn btn-primary"> Simpan Data </button>
						</div>
				</div>
			</div>
		</div>
	</div>
	</form>

	<!-- Penutup Container -->
</div>
<br><br><br>
