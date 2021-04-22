<?php
session_start();
if($_SESSION['status'] != "login"){
    header("location:/../login.php?message=belum_login");
}
?>

<div class="container justify-content-center">
<img class="logo mx-auto d-block" src="design/assets/logo_color.png" alt="">
</div>
<div class="container">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a href="" class="nav-link nav-top text-body"><strong>Nutrisi</strong></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-body"><strong>History</strong></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-body"><strong>Blog</strong></a>
        </li>
    </ul>
</div>