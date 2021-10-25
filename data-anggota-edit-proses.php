<?php
  include'koneksi.php';

  $nama_anggota = $_POST['nama_anggota'];
  $nama_umkm = $_POST['nama_umkm'];
  $alamat_umkm = $_POST['alamat_umkm'];
  $email_anggota = $_POST['email_anggota'];
  $username_anggota = $_POST['username_anggota'];
  $password_anggota = $_POST['password_anggota'];
  $telepon_anggota = $_POST['telepon_anggota'];
  $nip_anggota = $_POST['nip_anggota'];
  $no_izin_umkm = $_POST['no_izin_umkm'];

  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($db,
      "UPDATE tbl_anggota
      SET nama_anggota='$nama_anggota',nama_umkm='$nama_umkm',alamat_umkm='$alamat_umkm', email_anggota='$email_anggota',
      username_anggota='$username_anggota', password_anggota='$password_anggota', telepon_anggota='$telepon_anggota', 
      nip_anggota='$nip_anggota', no_izin_umkm='$no_izin_umkm'
      WHERE username_anggota='$username_anggota'"
    );
    header("location: data-anggota.php");
  }else {
    header("location: data-anggota-edit.php");
  }
?>