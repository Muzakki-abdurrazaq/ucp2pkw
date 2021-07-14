<?php 
	$host = "localhost";
	$user = "ucp2pkw_Muzakkiabdurrazaq";
	$pass = "20190140014";
	$db = "ucp2pkw_tokobukuaskara";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>