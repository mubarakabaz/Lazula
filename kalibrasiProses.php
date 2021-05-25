<?php
include('koneksi.php');
$kalibrasiPh = $_POST['kalibrasiPh'];
$kalibrasiPpm = $_POST['kalibrasiPpm'];

$query  = "UPDATE edit SET kalibrasiPh='$kalibrasiPh', kalibrasiPpm='$kalibrasiPpm' WHERE no='1'";
$update = mysqli_query($koneksi, $query);

if($update == TRUE){
    echo "Update Berhasil";
    header("location: kalibrasi.php");
}else{
    echo "Update Gagal";
}
?>