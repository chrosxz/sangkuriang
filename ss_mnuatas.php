<?php // tanggal untuk keperluan simulasi
  $st = "SELECT * FROM r_harini";
  $qrySS= mysqli_query($conSS, $st);
  $data = mysqli_fetch_array($qrySS);

  $tggl = date_create($data['tggl']);
  $_SESSION['harini'] = $tggl;

  if (isset($data['tggl'])) {
    $tggl = strtotime($data['tggl']) + 4321;
  } else {
    $tggl = date('Y-m-d');
  }

  //$tggl = strtotime($data['tggl']) + 4321;
  //$harini = date("Y-m-d H:i:s", $tggl);
  $harini = date("Y-m-d H:i:s");

  $st = "UPDATE r_harini SET tggl = '$harini'";
  $qrySS = mysqli_query($conSS, $st);
?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand ps-3" href="frmawal.php">
    <img src="alat2/sangkuriang.png" alt="logo" height="25"> Sangkuriang</a>

  <button class="btn btn-link btn-sm order-1 order-1g-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
    <i class="fas fa-bars"></i>
  </button>
    <div class="ms-2 my-2">
      <span class="navbar-brand">Tahun <?=date_format($_SESSION['harini'], "Y"); ?></span>
    </div>
    <div class="ms-auto me-3 my-2">
      <span class="navbar-text"><?=date_format($_SESSION['harini'], "d-m-Y H:i:s"); ?></span>
    </div>

    <?php if (isset($_SESSION['namaUser'])): ?>
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="mnuUser" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user fa-fw"></i> <?=$_SESSION['namaUser']; ?></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="mnuUser">
            <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
          </ul>
        </li>
      </ul>
    <?php endif; ?>
</nav>