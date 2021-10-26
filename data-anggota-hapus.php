<?php
	include'koneksi.php' ;
	
	$username_anggota = $_GET['username_anggota'];

	mysqli_query($db,
		"DELETE FROM tbl_anggota WHERE username_anggota='$username_anggota'"
	);

	header("location: data-anggota.php");
?>