<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Siput Jombang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Registrasi Siput Jombang
					</span>
				</div>

				<form method="post" action="regis-umkm-proses.php" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Nama Pemilik</span>
						<input type="text" name="nama_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Nama Usaha</span>
						<input type="text" name="nama_umkm" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Alamat</span>
						<input type="text" name="alamat_umkm" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Email</span>
						<input type="text" name="email_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Username</span>
						<input type="text" name="username_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Wajib diisi">
						<span class="label-input100">Password</span>
						<input type="password" name="password_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">Telepon</span>
						<input type="text" name="telepon_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">NIK</span>
						<input type="text" name="nip_anggota" class="input100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Wajib diisi">
						<span class="label-input100">No. Izin Usaha</span>
						<input type="text" name="no_izin_umkm" class="input100">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="login-umkm.php" class="txt1">
								Sudah punya akun? Login
							</a>
						</div>

						<div>
							<a href="#" class="txt1">
								Kembali ke beranda
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="Regitrasi" class="login100-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>