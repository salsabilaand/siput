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

	$sql = "INSERT INTO tbl_anggota (nama_anggota, nama_umkm, alamat_umkm, email_anggota, username_anggota, password_anggota, telepon_anggota, nip_anggota, no_izin_umkm) 
    VALUES ('$nama_anggota', '$nama_umkm', '$alamat_umkm', '$email_anggota', '$username_anggota', md5('$password_anggota'), '$telepon_anggota', '$nip_anggota', '$no_izin_umkm')";
	$query = mysqli_query($db, $sql);

	header("location: login-umkm.php");
?>