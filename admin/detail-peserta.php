<?php 
	
	session_start();
	include 'header.php';
	$peserta  = mysqli_query($konek, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");

	$t = mysqli_fetch_object($peserta);

?>

	<!-- content -->
	<div class="content">
		<div class="container">
			<h2 class="text-center" style="padding-bottom: 10px;">Detail Peserta</h2>
			
				<div class="box-bodys-2">

					<table class="table-data" border="0">
						<tr>
							<td>Kode Pendaftaran</td>
							<td>:</td>
							<td><?php echo $t-> id_pendaftaran ?></td>
						</tr>
						<tr>
							<td>Tahun Ajaran</td>
							<td>:</td>
							<td><?php echo $t-> th_ajaran ?></td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td><?php echo $t-> nm_peserta ?></td>
						</tr>
						<tr>
							<td>Tempat, Tanggal Lahir</td>
							<td>:</td>
							<td><?php echo $t-> tmp_lahir.', '.$t->tgl_lahir ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><?php echo $t-> jk ?></td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>:</td>
							<td><?php echo $t-> agama ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><?php echo $t-> almt_peserta ?></td>
						</tr>
					</table>

			
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>

	