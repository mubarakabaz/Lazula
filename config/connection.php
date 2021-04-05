<?php
    $server     = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "lazula";

    $connection = mysqli_connect($server, $username,$password, $database);
    if($connection == TRUE){
        echo "Berhasil Terhubung!";
    } else{
        echo "Gagal Terhubung!";
    }
?>