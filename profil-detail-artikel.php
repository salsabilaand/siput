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

        <!-- Blog Post -->
        <?php
        $judul_artikel=$_GET['judul_artikel'];
        $q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbl_artikel_anggota WHERE judul_artikel='$judul_artikel'");
        $r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
        ?>
        <h1 class="my-4"><?php echo $r_tampil_anggota['judul_artikel']; ?></h1>
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center"><b>(<?php echo $r_tampil_anggota['caption_gambar_artikel']; ?>)</b></p>
                <p class="card-text"><?php echo $r_tampil_anggota['isi_artikel']; ?></p>
                <p class="card-text"><?php echo $r_tampil_anggota['isi_artikel']; ?></p>
                <p class="card-text"><?php echo $r_tampil_anggota['isi_artikel']; ?></p>
                <p class="card-text"><?php echo $r_tampil_anggota['isi_artikel']; ?></p>
            </div>
            <div class="card-footer text-muted">
                Posted on <?php echo $r_tampil_anggota['tanggal_artikel']; ?>
            </div>
        </div><br>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Komentar</h2>
                <form action="komentar-input-proses.php?id_artikel=<?php echo $r_tampil_anggota['id_artikel_admin'];?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" value="<?php echo $_SESSION['sesi']; ?>"  disabled="" class="form-control" id="exampleFormControlInput1">
                    <input type="hidden" nama="username_anggota" value="<?php echo $_SESSION['sesi']; ?>" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Isi Komentar</label>
                    <textarea name="isi_komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <input type="submit" name="simpan" value="kirim" class="btn btn-primary">
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
	header('location:login.php');
}
?>