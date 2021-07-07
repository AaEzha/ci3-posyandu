<script>
	function suami(id) {
		console.log("NIK : " + id);
		$.ajax({
			type: "POST",
			url: "<?=base_url('welcome/penduduk');?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#Nama_Suami').val(data.Nama)
				$('#Tanggal_Lahir_Suami').val(data.Tanggal_Lahir)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};
	function istri(id) {
		console.log("NIK : " + id);
		$.ajax({
			type: "POST",
			url: "<?=base_url('welcome/penduduk');?>",
			data: {
				nik: id
			},
			dataType: 'json',
			success: function(data) {
				console.log(data);
				$('#Nama_Istri').val(data.Nama)
				$('#Tanggal_Lahir_Istri').val(data.Tanggal_Lahir)
			},
			error: function(res) {
				console.error(res.responseText);
			}
		});
	};
</script>
