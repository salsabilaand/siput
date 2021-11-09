<?php
session_start();

include'koneksi.php';

$tgl=date('Y-m-d');

if(isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])){
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistem Informasi Promosi UMKM Tekstil (SIPUT) Jombang
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/default-avatar.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          Hai <?php echo$_SESSION['sesi']; ?>!
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="data-anggota.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Data Akun UMKM</p>
            </a>
          </li>
          <li>
            <a href="data-artikel-anggota.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Data Artikel UMKM</p>
            </a>
          </li>
          <!-- <li>
            <a href="data-admin.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Data Akun Admin</p>
            </a>
          </li> -->
          <li>
            <a href="data-artikel-admin.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Data Artikel Admin</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">SIPUT JOMBANG</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="login.php">Logout</a>
                </div>
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
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Data Akun Anggota</h5>
              </div>
              <div class="card-body">
                <form action="data-anggota-edit-proses.php" method="POST" enctype="multipart/form-data">
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
                        <label>NIP</label>
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
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.jombangkab.go.id/" target="_blank">PEMKAB JOMBANG</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                Sistem Informasi Promosi UMKM Tekstil (SIPUT) Jombang  
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
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