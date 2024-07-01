<?php
  $conSS = mysqli_connect("localhost","root","EsaNara2508","sangkuriang");

  if ($conSS -> connect_error) {
    die("Tidak dapat menghubungi server");
  }

?>