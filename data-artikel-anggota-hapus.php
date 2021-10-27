<?php
	include'koneksi.php' ;
	
	$judul_artikel = $_GET['judul_artikel'];

	mysqli_query($db,
		"DELETE FROM tbl_artikel_anggota WHERE judul_artikel='$judul_artikel'"
	);

	header("location: data-artikel-anggota.php");
?>