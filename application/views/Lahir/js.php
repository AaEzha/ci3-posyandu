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
