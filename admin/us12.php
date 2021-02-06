<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script src="js/sweetalert2.js"></script>
<?php
require_once( "db.php");

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$kata = $_POST['kata'];

// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];


// tentukan lokasi file akan dipindahkan
$dirUpload = "images/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

$insert = "INSERT INTO halaman_struktur(nama, jabatan, kata, foto) VALUES('$nama', '$jabatan', '$kata', '$namaFile')";
$result = mysqli_query($db,$insert);
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