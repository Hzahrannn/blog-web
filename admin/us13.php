<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$link = $_POST['link'];

// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];


// tentukan lokasi file akan dipindahkan
$dirUpload = "images/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$insert = "INSERT INTO halaman_merchandise(link, foto) VALUES('$link', '$namaFile')";
$result = mysqli_query($db,$insert);
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