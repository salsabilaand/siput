<?php
session_start();

include'koneksi.php';

if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Beranda</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SIPUT JOMBANG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="beranda.php">Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profil.php">Profil
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
    $username_anggota=$_GET['username_anggota'];
    $q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbl_anggota WHERE username_anggota='$username_anggota'");
    $r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
  ?>

  <!-- Page Content -->
  <div class="container">

  <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Data Akun</h5>
              </div>
              <div class="card-body">
                <form action="profil-data-edit-proses.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_anggota" value="<?php echo $r_tampil_anggota['nama_anggota']; ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Usaha</label>
                        <input type="text" name="nama_umkm" value="<?php echo $r_tampil_anggota['nama_umkm']; ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat_umkm" value="<?php echo $r_tampil_anggota['alamat_umkm']; ?>"  class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email_anggota" value="<?php echo $r_tampil_anggota['email_anggota']; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" disabled="" value="<?php echo $r_tampil_anggota['username_anggota']; ?>" class="form-control">
                        <input type="hidden" name="username_anggota" value="<?php echo $r_tampil_anggota['username_anggota']; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password_anggota" value="<?php echo $r_tampil_anggota['password_anggota']; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon_anggota" value="<?php echo $r_tampil_anggota['telepon_anggota']; ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nip_anggota" value="<?php echo $r_tampil_anggota['nip_anggota']; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>No. Izin</label>
                        <input type="text" name="no_izin_umkm" value="<?php echo $r_tampil_anggota['no_izin_umkm']; ?>"  class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-round">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-light">
    <div class="container">
      <p class="m-0 text-center text-black">Sistem Informasi Promosi UMKM Tekstil (SIPUT) Jombang</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login-umkm.php');
}
?>