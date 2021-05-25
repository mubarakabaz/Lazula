<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
?>

<div class="container">
    <h1 class="text-center text-success">LazulaIoT</h1>

</div>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rectangel-2">
        <a class="navbar-brand" href="#">LazulaIoT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tabel.php">Tabel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="halamanChart.php">Grafik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="setting.php">Setting</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="kalibrasi.php">Kalibrasi</a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0" action="logout.php">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
</div>