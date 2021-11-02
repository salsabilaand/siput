<?php
session_start();

include'koneksi.php';

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
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

        <h1 class="my-4">Artikel Hari Ini
          <small><?php
            $tanggal= mktime(date("m"),date("d"),date("Y"));
            echo date("d-M-Y", $tanggal)."</b> ";
            date_default_timezone_set('Asia/Jakarta');
            ?>
        </small>
        </h1>

        <!-- Blog Post -->
        <?php
          $batas = 5;
          extract($_GET);
          if(empty($hal)){
            $posisi = 0;
            $hal = 1;
            $nomor = 1;
          }
          else {
            $posisi = ($hal - 1) * $batas;
            $nomor = $posisi+1;
          }	
          if($_SERVER['REQUEST_METHOD'] == "POST"){
            $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
            if($pencarian != ""){
              $sql = "SELECT * FROM tbl_artikel_admin WHERE judul_artikel LIKE '%$pencarian%'";
                        
              $query = $sql;
              $queryJml = $sql;	
                            
            }
            else {
              $query = "SELECT * FROM tbl_artikel_admin LIMIT $posisi, $batas";
              $queryJml = "SELECT * FROM tbl_artikel_admin";
              $no = $posisi * 1;
            }			
          }
          else {
            $query = "SELECT * FROM tbl_artikel_admin LIMIT $posisi, $batas";
            $queryJml = "SELECT * FROM tbl_artikel_admin";
            $no = $posisi * 1;
          }
                    
          $q_tampil_anggota = mysqli_query($db, $query);
          if(mysqli_num_rows($q_tampil_anggota)>0)
          {
            while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
              ?>
              <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title"><?php echo $r_tampil_anggota['judul_artikel']; ?></h2>
                  <p class="card-text"><?php echo $r_tampil_anggota['isi_artikel']; ?></p>
                  <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                  Posted on <?php echo $r_tampil_anggota['tanggal_artikel']; ?> by
                  <a href="#"><?php echo $r_tampil_anggota['username_admin']; ?></a>
                </div>
              </div>
            <?php $nomor++; }
          }
          else {
            echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
          }?>	
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Cari UMKM</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Kategori</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Batik</a>
                  </li>
                  <li>
                    <a href="#">Tenun</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Lainnya</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div> -->

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