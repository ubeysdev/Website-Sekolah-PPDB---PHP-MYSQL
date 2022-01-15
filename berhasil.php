<?php 
	include 'koneksi.php';
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
		<h2>Pendaftaran Berhasil</h2>

		<div class="box">
			<h4>Kode pendaftaran anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
		</div>

	</section>

</body>
</html>