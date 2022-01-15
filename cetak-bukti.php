<?php 
	include 'koneksi.php';

	$peserta = mysqli_query($konek, "SELECT *FROM tb_pendaftaran WHERE id_pendaftaran= '".$_GET['id']."' ");

	$px = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale">
	<link rel="stylesheet" type="text/css" href="css/styless.css">
	<link rel="shortcut icon" href="logo_czb_icon.ico">
	<title>PSB Online SMPN 2 Cipunagara</title>
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Bukti Pendaftaran</h2>
	<table class="table-data" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $px-> id_pendaftaran ?></td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td>:</td>
			<td><?php echo $px-> th_ajaran ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $px-> nm_peserta ?></td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $px-> tmp_lahir.', '.$px->tgl_lahir ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $px-> jk ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $px-> agama ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $px-> almt_peserta ?></td>
		</tr>
	</table>

</body>
</html>