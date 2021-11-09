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
          <li>
            <a href="data-anggota.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Data Akun UMKM</p>
            </a>
          </li>
          <li class="active ">
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
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
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
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Artikel Anggota</h4>
                <div class="row">
                    <div class="update col-sm-12">
                      <form method="POST">
                        <div class="input-group no-border">
                            <input type="text" name="pencarian" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                  <button type="submit" name="search" class="tombol" style="border:none;"><i class="nc-icon nc-zoom-split"></i></button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>
                        No.
                      </th>
                      <th>
                        ID Anggota
                      </th>
                      <th>
                        Judul
                      </th>
                      <th>
                        Gambar
                      </th>
                      <th>
                        Caption
                      </th>
                      <th>
                        Isi
                      </th>
                      <th>
                        Tanggal Terbit
                      </th>
                      <th id="label-opsi">
                        Opsi
                      </th>
                    </thead>

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
                        $sql = "SELECT * FROM tbl_artikel_anggota WHERE judul_artikel LIKE '%$pencarian%' OR
                        id_anggota LIKE '%$pencarian%'";
                        
                        $query = $sql;
                        $queryJml = $sql;	
                            
                      }
                      else {
                        $query = "SELECT * FROM tbl_artikel_anggota LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tbl_artikel_anggota";
                        $no = $posisi * 1;
                      }			
                    }
                    else {
                      $query = "SELECT * FROM tbl_artikel_anggota LIMIT $posisi, $batas";
                      $queryJml = "SELECT * FROM tbl_artikel_anggota";
                      $no = $posisi * 1;
                    }
                    
                    $q_tampil_anggota = mysqli_query($db, $query);
                    if(mysqli_num_rows($q_tampil_anggota)>0)
                    {
                    while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
                    ?>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $r_tampil_anggota['id_anggota']; ?></td>
                      <td><?php echo $r_tampil_anggota['judul_artikel']; ?></td>
                      <td><?php echo $r_tampil_anggota['gambar_artikel']; ?></td>
                      <td><?php echo $r_tampil_anggota['caption_gambar_artikel']; ?></td>
                      <td><?php echo $r_tampil_anggota['isi_artikel']; ?></td>
                      <td><?php echo $r_tampil_anggota['tanggal_artikel']; ?></td>
                      <td>
                        <div class="tombol-opsi-container"><a href="data-artikel-anggota-edit.php?judul_artikel=<?php echo $r_tampil_anggota['judul_artikel'];?>" class="tombol" style="color:#ef8157; font-weight:bold">Edit</a></div>
                        <div class="tombol-opsi-container"><a href="data-artikel-anggota-hapus.php?judul_artikel=<?php echo $r_tampil_anggota['judul_artikel']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol" style="color:#ef8157; font-weight:bold">Hapus</a></div>
                      </td>			
                    </tr>		
                    <?php $nomor++; }
                    }
                    else {
                      echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
                    }?>		
                  </table>
                  <?php
                  if(isset($_POST['pencarian'])){
                  if($_POST['pencarian']!=''){
                    echo "<div style=\"float:left;\">";
                    $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                    echo "Data Hasil Pencarian: <b>$jml</b>";
                    echo "</div>";
                  }
                  }
                  else{ ?>
                    <div style="float: left;">		
                    <?php
                      $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                      echo "Jumlah Data : <b>$jml</b>";
                    ?>			
                    </div>
                    <?php
                    }
                    ?>
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