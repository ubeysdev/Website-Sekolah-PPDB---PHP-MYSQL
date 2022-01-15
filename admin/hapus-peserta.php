<?php  

	include '../koneksi.php';

	if(isset($_GET['id'])){

		$hapus = mysqli_query($konek, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran= '".$_GET['id']."' ");

		echo '<script>window.location="peserta.php"</script>';
	}
?>