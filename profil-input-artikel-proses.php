<?php
include'koneksi.php';

  $id_anggota = $_POST['id_anggota'];
  $judul_artikel = $_POST['judul_artikel'];
  $gambar_artikel = $_POST['gambar_artikel'];
  $caption_gambar_artikel = $_POST['caption_gambar_artikel'];
  $isi_artikel = $_POST['isi_artikel'];
	
if(isset($_POST['simpan'])){

	$sql = "INSERT INTO tbl_artikel_anggota (id_anggota, judul_artikel, gambar_artikel, caption_gambar_artikel, isi_artikel) 
	VALUES ('$id_anggota','$judul_artikel', '$gambar_artikel', '$caption_gambar_artikel', '$isi_artikel')";
	$query = mysqli_query($db, $sql);

	header("location: profil.php");
}
?>