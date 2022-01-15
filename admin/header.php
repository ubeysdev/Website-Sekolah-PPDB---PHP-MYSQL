<?php
	session_start();  
	include '../koneksi.php';
	if (!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih dahulu !'</script>";
	}
	date_default_timezone_set("Asia/Jakarta"); 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="logo.ico">
	<title>Panel Admin - SMPN 2 Cipunagara</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			
			<!-- navbar brand-->
			<h2 class="nav-brand float-left"><a href="index-admin.php">SMP N 2 Cipunagara</a></h2>

			<!-- navbar menu -->
			<ul class="nav-menu float-right">
				<li><a href="index-admin.php">Dashboard</a></li>

				<?php if ($_SESSION['ulevel']=='Super Admin'){ ?>

					<li><a href="pengguna.php">Pengguna</a></li>
					<li><a href="peserta.php">Daftar Siswa</a></li>

				<?php }elseif($_SESSION['ulevel']=='Admin'){ ?>

					<li><a href="informasi.php">Informasi</a></li>
					<li><a href="peserta.php">Daftar Siswa</a></li>
					<li>
						<a href="">Pengaturan <i class="fa fa-caret-down"></i></a>

						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
							<li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
							<li><a href="pengajar.php">Identitas Pengajar</a></li>
						</ul>
					</li>

				<?php }  ?>

				<li>
					<a href=""><?= $_SESSION['uname']?> (<?= $_SESSION['ulevel']?>) <i class="fa fa-caret-down"></i></a>

					<!-- sub menu -->
					<ul class="dropdown">
						<li><a href="ubah-password.php">Change Password</a></li>
						<li><a href="keluar.php">Logout</a></li>
					</ul>
				</li>
			</ul>

			<div class="clearfix"></div>
		</div>
	</div>