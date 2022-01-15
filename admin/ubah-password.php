<?php include 'header.php' ?>



	<!-- content -->
	<div class="content">
		<div class="container">
			<div class="box">
				<div class="box-header">
					Change Password
				</div>
				<div class="box-bodys">

					<form action="" method="POST">
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass1" placeholder="Password" class="input-control" required>
						</div>
						<div class="form-group">
							<label>Ulangi Password</label>
							<input type="password" name="pass2" placeholder="Ulangi Password" class="input-control" value="<?= $p-> username?>" required>
						</div>
						
						<input type="submit" name="submit" value="Change Password" class="btn">
					</form>

					<?php
					if (isset($_POST['submit'])){

						$pass1 = addslashes($_POST['pass1']);
						$pass2 = addslashes($_POST['pass2']);
						$currdate = date('d-m-Y H:i:s');

						if($pass2 != $pass1){
							echo '<div class="alert"><strong>Password tidak sama</strong></div>';
						}else{
							$update = mysqli_query($conn, "UPDATE pengguna SET 
								password = '".MD5($pass1)."',
								updated_at = '".$currdate."'
								WHERE id = '".$_SESSION['uid']."'
							");

						
							if ($update){
								echo'Ubah Password Berhasil';
							}else{
								echo 'Data gagal diedit'.mysqli_error($conn);
							}
						}												
					}
					?>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>

	