<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$link = $_POST['link'];

$update = "UPDATE halaman_merchandise SET nama='$nama', harga='$harga', link='$link' WHERE id='$id'";
$result = mysqli_query($db,$update);
if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
				setTimeout(document.location.href = 'merchandise.php', 100);
				})
				</script>";

}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'merchandise.php', 100);
				})
				</script>";
	}

?>
</body>
</html>