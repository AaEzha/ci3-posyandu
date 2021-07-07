<script>
	function datanya(id) {
		$.ajax({
			type: "POST",
			url: "<?= base_url('welcome/penduduk'); ?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				$('#Nama_Meninggal').val(data.Nama)
				$('#Tanggal_Lahir').val(data.Tanggal_Lahir)
				$('#Jenis_Kelamin').val(data.Jenis_Kelamin)
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
				$('#Umur').val(data)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};

</script>
