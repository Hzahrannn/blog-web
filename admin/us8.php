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
// ambil data file
$namaFile = $_FILES['foto_wakil']['name'];
$namaSementara = $_FILES['foto_wakil']['tmp_name'];


// tentukan lokasi file akan dipindahkan
$dirUpload = "images/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$update = "UPDATE halaman_index SET foto_wakil='$namaFile' WHERE id='$id'";
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