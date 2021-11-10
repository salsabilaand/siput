<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$user	= $_POST['user'];
			$pass	= md5($_POST['pass']);
			$qry	= mysqli_query($db,"SELECT * FROM tbl_admin WHERE username_admin = '$user' AND password_admin = '$pass'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == 1)
			{
				$data_admin	= mysqli_fetch_array($qry);
				$_SESSION['sesi'] = $data_admin['username_admin'];
				
				echo "<meta http-equiv='refresh' content='0; url=data-anggota.php?user=$sesi'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}	
	}
	else
	{
	  include "login.php";
	}
?>