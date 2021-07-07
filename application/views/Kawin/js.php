<script>
	function suami(id) {
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/penduduk'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Nama_Suami').val(data.Nama)
				$('#Tanggal_Lahir_Suami').val(data.Tanggal_Lahir)
				$('#Pendidikan_Suami').val(data.Pendidikan)
				$('#Pekerjaan_Suami').val(data.Pekerjaan)
				$('#Alamat_Suami').val(data.Alamat)
				$('#Rt_Suami').val(data.Rt)
				$('#Rw_Suami').val(data.Rw)
				$('#Desa_Suami').val(data.Desa)
				$('#Kecamatan_Suami').val(data.Kecamatan)
				$('#Kabupaten_Suami').val(data.Kabupaten)
				$('#Provinsi_Suami').val(data.Provinsi)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/umur'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Umur_Suami').val(data)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};

	function istri(id) {
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/penduduk'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Nama_Istri').val(data.Nama)
				$('#Tanggal_Lahir_Istri').val(data.Tanggal_Lahir)
				$('#Pendidikan_Istri').val(data.Pendidikan)
				$('#Pekerjaan_Istri').val(data.Pekerjaan)
				$('#Alamat_Istri').val(data.Alamat)
				$('#Rt_Istri').val(data.Rt)
				$('#Rw_Istri').val(data.Rw)
				$('#Desa_Istri').val(data.Desa)
				$('#Kecamatan_Istri').val(data.Kecamatan)
				$('#Kabupaten_Istri').val(data.Kabupaten)
				$('#Provinsi_Istri').val(data.Provinsi)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/umur'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Umur_Istri').val(data)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};
</script>
