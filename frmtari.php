<?php
  session_start();
  include "koneksi.php";
  
  if (!isset($_SESSION['namaUser'])){
    echo "<script>window.location.replace(\"index.php\"); </script>";
    exit();
  }

  $idMenu = 11;
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
  <?php include "ss_mnuatas.php";
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php include "ss_mnukiri.php"; ?>
    </div>
    
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h4 class="mt-4">Daftar Tarian</h4>
          <form method="post" action="tariaksi.php">
            <?php
              $st = "SELECT * FROM t_tari ORDER BY nama";
              $qrySS= mysqli_query($conSS, $st);
              $nmr = 1; 
            ?>
            <table class="table table-sm">
              <thead>
                <tr>
                  <td colspan="8" class="text-end"></td>
                </tr>
                <tr>
                  <a href="frmtaritam.php" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tarian Baru</a>
                  <th class="text-center">No.</th> <th>Nama Tarian</th>
                  <th class="text-center">Kode</th>
                  <th class="text-center">Jenis</th>
                  <th class="text-center">Lama Latihan</th>
                  <th class="text-center">Pengajar</th>
                  <th class="text-center">Aktif</th>
                  <th class="text-center">Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($data) = mysqli_fetch_array($qrySS)): ?>
                  <tr>
                    <td class="text-center"><?=$nmr++; ?></td>
                    <td><?=$data['nama']; ?></td>
                    <td class="text-center"><?=$data['kode']; ?></td>
                    <td class="text-center">
                      <?php
                        switch ($data['jenis']) {
                          case "D" echo "Daerah"; break;
                          case "M" echo "Modern";
                        }
                      ?>
                    </td>
                    
                    <td class="text-center"><?=$data['lama']; ?> minggu</td>
                    <td class="text-center">?</td>
                    <td class="text-center">?</td>
                    <td class="text-center">
                      <button class="btn py-0" name="btnTariu" value="<?=$data['kode']; ?>"><i class="fas fa-edit"></i> Ubah </button>
                      <button class="btn py-0" name="btnTariH" value="<?=$data['kode; ?>"><i class="fa fa-trash-alt"></i> Hapus </button>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </form>
        </div>
      </main>

      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
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