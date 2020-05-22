<?php
include '../../conf.php';
include '../../conn.php';
$id = get('id');
$hapus = $koneksi->prepare("DELETE FROM sekolah WHERE `id` =
'".$id."'");
$hapus->execute();
header("location:../../index.php?p=sekolah");

include '../../conf.php';
include '../../library.php';

$id = get('id');
$hapus_data = $lib->delete($id);

if ($hapus_data) {
    header("location:../../index.php?p=sekolah");
}
?>