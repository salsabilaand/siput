<?php
include'koneksi.php';

$id_artikel = $_POST['id_artikel'];
$usename_anggota = $_POST['username_anggota'];
$isi_komentar = $_POST['isi_komentar'];
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbl_komentar (id_artikel, username_anggota, isi_komentar) VALUES ('$id_artikel', '$username_anggota', '$isi_komentar')";
	$query = mysqli_query($db, $sql);

	header("location: beranda.php");
}
?>