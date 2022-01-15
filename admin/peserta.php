<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		<div class="container">
			<div class="box">
				<div class="box-header">
					Daftar Peserta
				</div>
				<div class="box-bodys">

					<form action="">
						<div class="input-group">
							<input type="text" name="key" placeholder="Pencarian">
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>

					<table class="table" border="0">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Peserta</th>
								<th>Nama Peserta</th>
								<th>Jenis Kelamin</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$nom = 1;
							$list_peserta = mysqli_query($konek,"SELECT *FROM tb_pendaftaran");
							while($row = mysqli_fetch_array($list_peserta)){

							?>

							<tr>
								<td><?php echo $nom++ ?></td>
								<td><?php echo $row['id_pendaftaran'] ?></td>
								<td><?php echo $row['nm_peserta'] ?></td>
								<td><?php echo $row['jk'] ?></td>
								<td>
									<a href="detail-peserta.php ?id=<?php echo $row['id_pendaftaran']  ?>" title="Detail" class="text-biru"><i class="fas fa-info-circle"></i></a>&nbsp;&nbsp;&nbsp;
									<a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran']  ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')" title="Hapus Data" class="text-red"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php }?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>

	