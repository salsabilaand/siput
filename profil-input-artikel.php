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
            <a class="nav-link" href="tentang-card.php">Tentang</a>
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
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Posting Artikel Baru</h2>
                <form action="profil-input-artikel-proses.php" method="POST" enctype="multipart/form-data">
                <?php
                  $username_anggota=$_SESSION['sesi'];
                  $q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbl_anggota WHERE username_anggota='$username_anggota'");
                  $r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
                ?> 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>ID UMKM</label>
                        <input type="text" value="<?php echo $r_tampil_anggota['id_anggota']; ?>" disabled="" class="form-control">
                        <input type="hidden" name="id_anggota" value="<?php echo $r_tampil_anggota['id_anggota']; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Judul</label>
                        <input type="text" name="judul_artikel" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Gambar</label>
                        <input type="text" name="gambar_artikel" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Caption</label>
                        <input type="text" name="caption_gambar_artikel" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Isi</label>
                        <textarea name="isi_artikel" class="form-control textarea"></textarea>
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