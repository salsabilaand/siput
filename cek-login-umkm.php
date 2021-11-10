<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$user	= $_POST['user'];
			$pass	= md5($_POST['pass']);
			$qry	= mysqli_query($db,"SELECT * FROM tbl_anggota WHERE username_anggota = '$user' AND password_anggota = '$pass'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == 1)
			{
				$data_anggota	= mysqli_fetch_array($qry);
				$_SESSION['sesi'] = $data_anggota['username_anggota'];
				
				echo "<meta http-equiv='refresh' content='0; url=beranda.php?user=$sesi'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login-umkm.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}	
	}
	else
	{
	  include "login-umkm.php";
	}
?>