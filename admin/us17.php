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
$nama_divisi = $_POST['nama_divisi'];
$anggota = $_POST['anggota'];

$update = "UPDATE halaman_struktur SET nama_divisi='$nama_divisi', anggota='$anggota' WHERE id='$id'";
$result = mysqli_query($db,$update);
if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
				setTimeout(document.location.href = 'struktur.php', 100);
				})
				</script>";

}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'struktur.php', 100);
				})
				</script>";
	}

?>
</body>
</html>