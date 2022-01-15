<?php 
	include 'koneksi.php';

	date_default_timezone_set("Asia/Jakarta"); 

	if(isset($_POST['submit'])){

		//ambil 1 id terbesar di kolom id pendaftaran & ambil 5 karakter dari kanan
		$getMaxId = mysqli_query($konek, "SELECT MAX(RIGHT(id_pendaftaran,5)) AS id FROM tb_pendaftaran");

		$did = mysqli_fetch_object($getMaxId);
		$generateId = 'P' .date('Y').sprintf("%05s", $did->id +1);

		//proses insert
		$insert = mysqli_query($konek, "INSERT INTO tb_pendaftaran VALUES (

			'".$generateId."',
			'".date('Y-m-d')."',
			'".$_POST['th_ajaran']."',
			'".$_POST['nm']."',
			'".$_POST['tmp_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['kelamin']."',
			'".$_POST['agama']."',
			'".$_POST['alamat']."'
			
		)");

		if($insert){
			echo'<script>window.location="berhasil.php?id='.$generateId.' "</script>';
		}else {
			echo 'asyem'.mysqli_error($konek);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale">
	<link rel="stylesheet" type="text/css" href="css/styless.css">
	<link rel="shortcut icon" href="logo_czb_icon.ico">
	<title>PSB Online SMPN 2 Cipunagara</title>
</head>
<body>

	<!-- bagian box formulir-->
	<section class="box-formulir">
		<h2>Formulir Pendaftaran Siswa Baru</h2>

		<!-- form pendaftaran -->
		<form action="" method="POST">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
						</td>
					</tr>
				</table>
			</div>
			<h3>Data Diri Calon Siswa / Siswi</h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmp_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="kelamin" class="input-control" value="Laki-laki"> Laki-laki &nbsp; &nbsp; &nbsp;
							<input type="radio" name="kelamin" class="input-control" value="Perempuan"> Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value="">--Pilih--</option>
								<option value="Islam">Islam</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
								<option value="Kristen">Kristen</option>
								<option value="Konghucu">Konghucu</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div>

		</form>

	</section>

</body>
</html>