<?php
	include'koneksi.php' ;
	
	$username_admin = $_GET['username_admin'];

	mysqli_query($db,
		"DELETE FROM tbl_admin WHERE username_admin='$username_admin'"
	);

	header("location: data-admin.php");
?>