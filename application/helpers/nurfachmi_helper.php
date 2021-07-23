<?php

function is_logged_in($role = false)
{
	$ci = get_instance();
	if (!$ci->session->userdata('id')) {
		redirect('auth');
	}

	if ($role) {
		$role_id = $ci->session->userdata('role_id');

		if ($role_id != $role and $role_id != "1") {
			redirect('auth/blocked');
		}
	}
}

function umur($umur, $output = "tahun")
{
	$bday = new DateTime($umur);
	$today = new Datetime(date('Y-m-d'));
	$diff = $today->diff($bday);

	switch ($output) {
		case 'tahun':
			$t = $diff->y . " tahun";
			break;
		
		case 'bulan':
			$t = $diff->y . " tahun, " .$diff->m . " bulan";
			break;
		
		case 'hari':
			$t = $diff->m . " bulan, " .$diff->d . " hari";
			break;
		
		default:
			$t = $diff->y;
			break;
	}
	return $t;
}

function penduduk($id, $output = "Nama")
{
	$ci = get_instance();
	$ci->db->select($output);
	$ci->db->where('NIK', $id);
	$res = $ci->db->get('penduduk');
	$res =  $res->row();

	if(is_null($res)){
		return "n/a";
	}else{
		return $res->$output;
	}
}

function getData($id, $primary, $tabel, $output)
{
	$ci = get_instance();
	$ci->db->select($output);
	$ci->db->where($primary, $id);
	$res = $ci->db->get($tabel);
	$res =  $res->row();

	if(is_null($res)){
		return "n/a";
	}else{
		return $res->$output;
	}
}

function dede($data)
{
	var_dump($data); die;
}

function tanggal($date)
{
	$newDate = date("j F Y", strtotime($date));  
    return $newDate;
}
