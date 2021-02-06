<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$id ="1";
$nama_wakil = $_POST['nama_wakil'];
$sambutan_wakil = $_POST['sambutan_wakil'];

$update = "UPDATE halaman_index SET nama_wakil='$nama_wakil', sambutan_wakil='$sambutan_wakil' WHERE id='$id'";
$result = mysqli_query($db,$update);
if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";

}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}


?>
</body>
</html>
