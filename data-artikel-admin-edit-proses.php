<?php
  include'koneksi.php';

  $username_admin = $_POST['username_admin'];
  $judul_artikel = $_POST['judul_artikel'];
  $gambar_artikel = $_POST['gambar_artikel'];
  $caption_gambar_artikel = $_POST['caption_gambar_artikel'];
  $isi_artikel = $_POST['isi_artikel'];


  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($db,
      "UPDATE tbl_artikel_admin
      SET username_admin='$username_admin', judul_artikel='$judul_artikel', gambar_artikel='$gambar_artikel',
      caption_gambar_artikel='$caption_gambar_artikel', isi_artikel='$isi_artikel'
      WHERE judul_artikel='$judul_artikel'"
    );
    header("location: data-artikel-admin.php");
  }else {
    header("location: data-artikel-admin-edit.php");
  }
?>