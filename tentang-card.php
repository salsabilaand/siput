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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <!-- Blog Post -->
        <div class="card">
            <div class="card-body">
              <center><h2 class="card-text">
              Selamat Datang di SIPUT JOMBANG<br>
              <h5>(Sistem Informasi Promosi UMKM Tekstil Jombang)</h5>
              <br>
              <br>
              <p> SIPUT Jombang ini adalah website sarana publikasi Sistem Informasi untuk mempromosikan Produk UMKM Tekstil di Jombang agar lebih meluas.<br>
              Sistem informasi ini dibuat bagi para UMKM Tekstil di Jombang yang telah terdaftar karena hanya di pergunakan untuk promosi produk UMKM Tekstil yang valid dan terjamin.
              <br>
              Sistem informasi ini memiliki fitur pembuatan akun, posting produk berguna menjadi sarana dalam mempermudah pengenalan produk dan terdapat juga fitur komentar yag berguna sebagai sarana kolaborasi dengan UMKM Tekstil lainnya yang berada di  Jombang sesuai requirement yang telah disetujui.
              </p>
              <br>
            </div>
        </div><br>
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
	header('location:login.php');
}
?>