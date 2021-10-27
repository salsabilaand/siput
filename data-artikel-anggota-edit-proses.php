<?php
  include'koneksi.php';

  $id_anggota = $_POST['id_anggota'];
  $judul_artikel = $_POST['judul_artikel'];
  $gambar_artikel = $_POST['gambar_artikel'];
  $caption_gambar_artikel = $_POST['caption_gambar_artikel'];
  $isi_artikel = $_POST['isi_artikel'];


  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($db,
      "UPDATE tbl_artikel_anggota
      SET id_anggota='$id_anggota', judul_artikel='$judul_artikel', gambar_artikel='$gambar_artikel',
      caption_gambar_artikel='$caption_gambar_artikel', isi_artikel='$isi_artikel'
      WHERE judul_artikel='$judul_artikel'"
    );
    header("location: data-artikel-anggota.php");
  }else {
    header("location: data-artikel-anggota-edit.php");
  }
?>