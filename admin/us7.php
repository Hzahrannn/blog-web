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
$nama_ketua = $_POST['nama_ketua'];
$sambutan_ketua = $_POST['sambutan_ketua'];

$update = "UPDATE halaman_index SET nama_ketua='$nama_ketua', sambutan_ketua='$sambutan_ketua' WHERE id='$id'";
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
