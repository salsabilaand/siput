<?php
	include'koneksi.php' ;
	
	$judul_artikel = $_GET['judul_artikel'];

	mysqli_query($db,
		"DELETE FROM tbl_artikel_admin WHERE judul_artikel='$judul_artikel'"
	);

	header("location: data-artikel-admin.php");
?>