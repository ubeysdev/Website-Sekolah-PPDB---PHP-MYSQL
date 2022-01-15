<?php include 'header.php' ?>

	<!-- content -->
	<div class="content">
		<div class="container">
			<div class="box">
				<div class="box-header">
					Tambah Pengguna
				</div>
				<div class="box-bodys">

					<form action="" method="POST">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" placeholder="Username" class="input-control" required>
						</div>
						<div class="form-group">
							<label>Level</label>
							<select name="level" class="input-control" required>
								<option value="">Pilih</option>
								<option value="Super Admin">Super Admin</option>
								<option value="Admin">Admin</option>
							</select>
						</div>

						<button type="button" class="btn" onclick="window.location='pengguna.php'">Back</button>
						<input type="submit" name="submit" value="Simpan" class="btn">
					</form>

					<?php
					if (isset($_POST['submit'])){

						$nama = addslashes(ucwords($_POST['nama']));
						$user = addslashes($_POST['user']);
						$level = $_POST['level'];
						$pass  = '123456';

						$cek   =  mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '".$user."'");
						if(mysqli_num_rows($cek)>0){
							echo '<div class="alert"><strong>Username sudah digunakan</strong></div>';
						}else{

								$simpan = mysqli_query($conn, "INSERT INTO pengguna VALUES (
								null,
								'".$nama."',
								'".$user."',
								'".MD5($pass)."',
								'".$level."',
								null,
								null
						)");
							if ($simpan){
								echo'Data berhasil disimpan';
							}else{
								echo 'Data gagal disimpan'.mysqli_error($conn);
							}
						}

					}
					?>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>

	