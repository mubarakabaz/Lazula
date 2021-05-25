<?php
include('koneksi.php');

$data = mysqli_query($koneksi, "SELECT * FROM edit WHERE no='1'");
$row = mysqli_fetch_array($data);
$phSetA         = $row['phSetA'];
$phSetB         = $row['phSetB'];
$ppmSetA        = $row['ppmSetA'];
$ppmSetB        = $row['ppmSetB'];
$kalibrasiPh    = $row['kalibrasiPh'];
$kalibrasiPpm   = $row['kalibrasiPpm'];
$suhu           = $row['suhuAir'];
$config = array(
    'phSetA'        => $phSetA,
    'phSetB'        => $phSetB,
    'ppmSetA'       => $ppmSetA,
    'ppmSetB'       => $ppmSetB,
    'kalibrasiPh'   => $kalibrasiPh,
    'kalibrasiPpm'  => $kalibrasiPpm
    'suhuAir'       => $suhu
);
echo json_encode($config);
