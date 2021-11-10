<?php
  include'koneksi.php';

  $username_admin = $_POST['username_admin'];
  $password_admin = $_POST['password_admin'];


  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($db,
      "UPDATE tbl_admin
      SET username_admin='$username_admin', password_admin=md5('$password_admin')
      WHERE username_admin='$username_admin'"
    );
    header("location: data-admin.php");
  }else {
    header("location: data-admin-edit.php");
  }
?>