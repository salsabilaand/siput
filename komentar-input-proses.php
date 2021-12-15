<?php
include'koneksi.php';

$id_artikel_admin = $_POST['id_artikel_admin'];
$username_anggota = $_POST['username_anggota'];
$isi_komentar = $_POST['isi_komentar'];
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbl_komentar (id_artikel, username_anggota, isi_komentar) VALUES ('$id_artikel_admin', '$username_anggota', '$isi_komentar')";
	$query = mysqli_query($db, $sql);

	header("location: beranda.php");
}
?>