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
      <div class="col-md-8">

        <?php
          $username_anggota=$_SESSION['sesi'];
          $q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbl_anggota WHERE username_anggota='$username_anggota'");
          $r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
        ?>
          <div class="card">
              <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
              <div class="card-body">
                  <h1><b><?php echo $r_tampil_anggota['nama_umkm']; ?></b></h1>
                  <p class="card-text"><?php echo $r_tampil_anggota['nama_anggota']; ?></p>
                  <p class="card-text"><?php echo $r_tampil_anggota['alamat_umkm']; ?></p>
                  <a href="profil-data-edit.php?username_anggota=<?php echo $r_tampil_anggota['username_anggota'];?>" class="tombol">Edit profil&emsp;</a><a href="login-umkm.php">Logout</a>
              </div>
          </div><br>
          <?php
          $id_anggota = $r_tampil_anggota['id_anggota'];     
          $q_tampil_artikel = mysqli_query($db, "SELECT * FROM tbl_artikel_anggota WHERE id_anggota='$id_anggota'");
          if(mysqli_num_rows($q_tampil_artikel)>0)
          {
            while($r_tampil_artikel=mysqli_fetch_array($q_tampil_artikel)){
              ?>
              <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title"><?php echo $r_tampil_artikel['judul_artikel']; ?></h2>
                  <p class="card-text"><?php echo $r_tampil_artikel['isi_artikel']; ?></p>
                  <a href="profil-detail-artikel.php?judul_artikel=<?php echo $r_tampil_artikel['judul_artikel'];?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                  Posted on <?php echo $r_tampil_artikel['tanggal_artikel']; ?>
                </div>
              </div>
            <?php }
          }
          else {
            echo "<p>Data Tidak Ditemukan<p>";
          }?>	
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Posting Artikel Baru</h5>
          <div class="card-body">
            <div class="input-group">
              <span class="input-group-append">
                <form action="profil-input-artikel.php">
                  <input type="submit" name="simpan" value="Posting!" class="btn btn-primary btn-round">
                </form>
              </span>
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