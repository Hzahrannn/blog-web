<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="js/sweetalert2.js"></script>
<body>
<?php
	session_start();
	require_once( "db.php");

	$username = md5($_POST['username']);
	$password = md5($_POST['password']);

	$sql= "SELECT * FROM login_user WHERE username = '$username'";
	$query = $db->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<script>
			Swal.fire('Gagal.', 'Gagal Login!', 'error').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";
	} else {
		if ($password <> $hasil['password']){
			echo "<script>
			Swal.fire('Gagal.', 'Gagal Login!', 'error').then(function(){
				setTimeout(document.location.href = 'login.php', 100);
				})
				</script>";
		}
		else {
		$_SESSION ['username'] = $hasil['username'];
		
		echo "<script>
			Swal.fire('Berhasil.', 'Berhasil Login!', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
		}
	}
	?>
</body>
</html>
