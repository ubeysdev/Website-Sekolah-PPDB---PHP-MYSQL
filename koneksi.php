<?php 
	$conn = mysqli_connect('localhost','root','', 'db_sekolah') or die('Gagal terhubung ke database');

	//membuat koneksi database
	$host = 'localhost';  
	$user = 'root';  
	$pass = '';  
	$db   = 'db_psb';  

	$konek = mysqli_connect($host,$user,$pass,$db);

	if(!$konek){
		echo 'Error :'.mysqli_connect_error($konek);
	}
?>
