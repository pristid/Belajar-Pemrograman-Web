<?php 
$db = "crud_pdo";
$host = mysqli_connect("localhost","root","",$db);

if($host)
{
    echo "Koneksi Host Berhasil.</br>";
}
else
{
    echo "Koneksi Gagal.</br>";
}

//isikan dengan nama database yang akan dihubungkan

if($db)
{
    echo "Koneksi Database Berhasil.";
}
else
{
    echo "Koneksi Database Gagal.";
}
?>