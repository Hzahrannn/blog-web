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
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$header = $_POST['header'];
$isi = $_POST['isi'];

$update = "UPDATE halaman_berita SET tanggal='$tanggal', judul='$judul', header='$header', isi='$isi' WHERE id='$id'";
$result = mysqli_query($db,$update);
if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Berhasil Update!', 'success').then(function(){
				setTimeout(document.location.href = 'berita.php', 100);
				})
				</script>";

}
	else{
		 echo "<script>
			Swal.fire('Gagal.', 'Gagal Update!', 'error').then(function(){
				setTimeout(document.location.href = 'berita.php', 100);
				})
				</script>";
	}

?>
</body>
</html>