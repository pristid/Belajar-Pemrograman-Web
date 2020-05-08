<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($host,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['hak']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai operator1
	}else if($data['hak']=="operator1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak'] = "operator1";
		// alihkan ke halaman dashboard operator1
		header("location:halaman_operator1.php");
 
	// cek jika user login sebagai operator2
	}else if($data['hak']=="operator2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak'] = "operator2";
		// alihkan ke halaman dashboard operator2
		header("location:halaman_operator2.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>