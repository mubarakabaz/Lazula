<html>

<head>
    <?php
    // header("refresh: 5");
    include('desain.php');
    ?>

    <style>
        body {
            padding: 20px;
        }

        @media screen and (min-width: 360px) {
            body {
                padding-left: 20px;
                padding-right: 20px;
            }

        }
    </style>
</head>

<body>

    <?php include('navbar.php'); ?>

    <div class="container">
        <br><br>
        <?Php
        include('koneksi.php');

        $data           = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 1");
        $row            = mysqli_fetch_array($data);
        $ph             = $row['ph'];
        $tds            = $row['tds'];
        $pompaPHNaik    = $row['pompaPHNaik'];
        $pompaPHTurun   = $row['pompaPHTurun'];
        $pompaNutrisi   = $row['pompaNutrisi'];
        $pompaAirBaku   = $row['pompaAirBaku'];
        //$suhu           = $row['suhuAir'];
        ?>


        <div class="container mb-4">
            <div class="font-weight-bold text-center mb-2">
                Realtime Monitoring
            </div>

            <div class="row">
                <div class="col-3">
                    <strong>Tanaman</strong>
                </div>
                <div class="col-2">:</div>
                <div class="col">
                    Caisim
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <strong>Suhu</strong>
                </div>
                <div class="col-2">:</div>
                <div class="col">
                    34
                </div>
            </div>
        </div>

        <div class="font-weight-bold text-center mb-2">
            Status Nutrisi
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="font-weight-bold text-center">Status PH</div>
                        <h1 class="card-text text-center">
                            <?php echo $ph; ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="font-weight-bold text-center">Status TDS</div>
                        <h1 class="card-text text-center">
                            <?php echo $tds; ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col">
                <div class="card border-0 bg-light">
                    <div class="card-header border-0 bg-white">
                        <h5 class="text-center">Pompa PH Naik</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text text-center">
                            <?php
                            if ($pompaPHNaik == 1)
                                echo "<div class='text-success'>" . "ON" . "</div>";
                            else
                                echo "<div class='text-danger'>" . "OFF" . "</div>";
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-light">
                    <div class="card-header border-0 bg-white">
                        <h5 class="text-center">Pompa PH Turun</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text text-center">
                            <?php
                            if ($pompaPHTurun == 1)
                                echo "<div class='text-success'>" . "ON" . "</div>";
                            else
                                echo "<div class='text-danger'>" . "OFF" . "</div>";
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
                <div class="card border-0 bg-light">
                    <div class="card-header border-0 bg-white">
                        <h5 class="text-center">Pompa Nutrisi</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text text-center">
                            <?php
                            if ($pompaNutrisi == 1)
                                echo "<div class='text-success'>" . "ON" . "</div>";
                            else
                                echo "<div class='text-danger'>" . "OFF" . "</div>";
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 bg-light">
                    <div class="card-header border-0 bg-white">
                        <h5 class="text-center">Pompa Air Baku</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="card-text text-center">
                            <?php
                            if ($pompaAirBaku == 1)
                                echo "<div class='text-success'>" . "ON" . "</div>";
                            else
                                echo "<div class='text-danger'>" . "OFF" . "</div>";
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>