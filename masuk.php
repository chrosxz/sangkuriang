<?php
  session_start(); include "koneksi.php";

  if (!isset($_POST['txtNama']))
  {
    echo "<script>window.location.replace(\"index.php\"); </script>";
    exit();
  }
  
  if ($_POST['txtNama'] != "") {
    $_SESSION['namaUser'] = $_POST['txtNama'];
    echo "<script>window.location.replace(\"frmawal.php\"); </script>";
    exit();
  }
  else {
    echo "<script>window.location.replace(\"index.php\"); </script>";
    exit();
  }
?>