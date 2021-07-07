<script>
	function suami(id) {
		console.log(id);
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/penduduk'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Nama_KK_Pindah').val(data.Nama)
				$('#Tanggal_Lahir_KK_Pindah').val(data.Tanggal_Lahir)
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
				$('#Umur_KK_Pindah').val(data)
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
				$('#Nama_Istri_Pindah').val(data.Nama)
				$('#Tanggal_Lahir_Istri_Pindah').val(data.Tanggal_Lahir)
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
				$('#Umur_Istri_Pindah').val(data)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};
</script>
