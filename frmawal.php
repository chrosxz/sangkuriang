<?php
  session_start();
  include "koneksi.php";

  if (!isset($_SESSION['namaUser'])){
    echo "<script>window.location.replace(\"index.php\"); </script>";
    exit();
  }

  $idMenu = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google" value="notranslate">
  <meta name="robots" content="nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sangkuriang">
  <meta name="author" content="Andre">
  <link rel="icon" href="alat2/sangkuriang.ico">

  <title>Sangkuriang</title>
  <link rel="stylesheet" href="alat2/styles.css">
  <link rel="stylesheet" href="alat2/all.min.css">
  <script src="alat2/all.min.js"></script>
</head>
<body class="sb-nav-fixed">
  <?php include "ss_mnuatas.php"; ?>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php include "ss_mnukiri.php"; ?>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h4 class="mt-4">Tarian yang Diajarkan</h4>
        </div>
      </main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">&copy; 2022 andre.unigamalang</div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="alat2/bootstrap.bundle.min.js"></script>
  <script src="alat2/scripts.js"></script>
</body>
</html>

