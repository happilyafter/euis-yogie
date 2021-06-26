
<?php
	$db_host = "103.82.242.60";
	$db_user = "citrapas_aplikasi";
	$db_pass = "bFgxDO;G1gGN";
	$db_name = "citrapas_aplikasi";
	
	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('koneksi Gagal!!!');
	
	if(mysqli_connect_errno()){
		echo 'Database Tidak Ditemukan Diserver'.mysqli_connect_error();
	}
?>

