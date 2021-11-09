<?php
include'koneksi.php';

  $username_admin = $_POST['username_admin'];
  $judul_artikel = $_POST['judul_artikel'];
  $gambar_artikel = $_POST['gambar_artikel'];
  $caption_gambar_artikel = $_POST['caption_gambar_artikel'];
  $isi_artikel = $_POST['isi_artikel'];
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbl_artikel_admin (username_admin, judul_artikel, gambar_artikel, caption_gambar_artikel, isi_artikel) 
	VALUES ('$username_admin','$judul_artikel', '$gambar_artikel', '$caption_gambar_artikel', '$isi_artikel')";
	$query = mysqli_query($db, $sql);

	header("location: data-artikel-admin.php");
}
?>