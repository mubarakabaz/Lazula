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
    <nav class="mb-2">
        <?php include('design/navbar.php'); ?>
    </nav>

    <div class="container">

        <?php
            include('config/connection.php');
            $data           = mysqli_query($connection, "SELECT * FORM data ORDER BY no DESC LIMIT 1");
            $row            = mysqli_fetch_array($data);
            $ph             = $row['ph'];
            $tds            = $row['tds'];
            $pompaPHNaik    = $row['pompaPHNaik'];
            $pompaPHTurun   = $roww['pompaPHTurun'];
            $pompaNutrisi   = $row['pompaNutrisi'];
            $pompaAirBaku   = $row['pompaAirBaku'];
        ?>

        <!-- info nama tanaman & suhu -->
        <div class="card mx-auto mb-2" style="max-width: 25rem;">
            <div class="card-body">
                <div class="lead text-center">
                    <strong>Realtime Monitoring</strong>
                </div>
                <hr />
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
                <div class="row">
                    <div class="col-6">
                        <strong>pH</strong>
                    </div>
                    <div class="col-6"> : 6.4</div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <strong>TDS</strong>
                    </div>
                    <div class="col-6"> : 800 ppm</div>
                </div>
                <br />
                <div class="lead text-center">
                    Chart
                </div>
                <br />
                <?php include('chart.php'); ?>
            </div>
        </div>

        <!-- Status Pompa -->
        <div class="card mx-auto mb-2" style="max-width: 25rem;">
            <div class="card-body">
                <div class="lead text-center">
                    <div class="lead text-center"><strong>Pompa</strong></div>
                    <hr />
                    <div class="row">
                        <div class="col text-center">
                            <strong>pH A</strong>
                        </div>
                        <div class="col text-center">
                            <strong>pH B</strong>
                        </div>
                        <div class="col text-center">
                            <strong>Nutrisi</strong>
                        </div>
                        <div class="col text-center">
                            <strong>AirBaku</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center text-danger">OFF</div>
                        <div class="col text-center text-danger">OFF</div>
                        <div class="col text-center text-danger">OFF</div>
                        <div class="col text-center text-danger">OFF</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>