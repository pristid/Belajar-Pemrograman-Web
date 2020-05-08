<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['hak']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Pegawai</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['hak']; ?></b>.</p>
    <p><a href="crud/index.php")>LATIHAN CRUDSRUD</a></p>
	<a href="logout.php">LOGOUT</a>
	<br/>
	<br/>
 
</body>
</html>