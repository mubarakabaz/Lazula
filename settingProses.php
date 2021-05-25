<?php
include('koneksi.php');
$phSetA = $_POST['phSetA'];
$phSetB = $_POST['phSetB'];
$ppmSetA = $_POST['ppmSetA'];
$ppmSetB = $_POST['ppmSetB'];

$query  = "UPDATE edit SET phSetA='$phSetA', phSetB='$phSetB', ppmSetA='$ppmSetA', ppmSetB='$ppmSetB' WHERE no='1'";
$update = mysqli_query($koneksi, $query);

if($update == TRUE){
    echo "Update Berhasil";
    header("location: setting.php");
}else{
    echo "Update Gagal";
}

?>