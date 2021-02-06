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
$visi = $_POST['visi'];
$misi = $_POST['misi'];


$update = "UPDATE halaman_index SET visi='$misi', misi='$misi' WHERE id='$id'";
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
