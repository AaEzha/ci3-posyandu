<div class="container">
	<br>
	<h2 class="text-center"> Edit Data Pengguna</h2>
	<hr class="mx-auto" width="35%">
	<p></p>
	<div class="card mx-auto" style="width: 30rem;">
		<div class="card-body">
			<h6 class="text-center"> Formulir Edit Data Pengguna </h6>
			<hr>

			<!-- Form Validation -->
			<?php if (validation_errors()) :
			?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php endif; ?>

			<!--form -->
			<form action="" method="POST">
				<input type="hidden" name="id" value="<?= $data['id']; ?>">
				<div class="mb-3">
					<label for="name" class="form-label">Nama Pengguna</label>
					<input type="text" class="form-control" name="name" value="<?= $data['name'] ?>">
				</div>
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="text" class="form-control" name="password" value="" placeholder="Kosongkan jika tidak ingin mengubah password">
				</div><br>
				<button type="reset" class="btn btn-sm btn-success float-end">Batal</button>
				<input class="btn btn-sm float-start text-white" type="submit" Style="background-color:#4597b0" name="edit" value="Ubah Data">
			</form>

		</div>
	</div>
</div>
<br><br><br><br>
