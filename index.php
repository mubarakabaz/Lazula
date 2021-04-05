<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        //header("refresh: 3");
        include('design/design.php');
    ?>
</head>
<body>

    <!-- Navs Top -->
    <nav>
        <?php include('design/navbar.php'); ?>
    </nav>
    
    <div class="container-lg">
        <hr class="line-horizontal"/>
        <div class="text-center">
            <div class="display-6"><strong>Realtime Monitoring</strong></div>
            <br/>
        </div>
        
        <div class="container-md info-satu">
            <div class="row">
                <div class="col-6">
                    <strong>Nama Tanaman</strong>
                </div>
                <div class="col-6"> : Caisim</div>
            </div>
            <div class="row">
                <div class="col-6">
                    <strong>Suhu</strong>
                </div>
                <div class="col-6"> : 24 <i class="icofont-celsius"></i></div>
            </div>
        </div>
    </div>
</body>
</html>