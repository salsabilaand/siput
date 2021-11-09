<?php
include'koneksi.php';

$username_admin = $_POST['username_admin'];
$password_admin = $_POST['password_admin'];
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbl_admin (username_admin, password_admin) VALUES ('$username_admin','$password_admin')";
	$query = mysqli_query($db, $sql);

	header("location: data-admin.php");
}
?>