<html>

<head>
    <?php
    // header("refresh: 5");
    include('desain.php');
    ?>
</head>

<body>
    <div class="container">
        <br>
        <h3 class="text-center text-primary"><STRONG>Sistem Hidroponik Otomatis</STRONG></h3>
        <P class="text-center">Menggunakan <Strong>PH Sensor</Strong>, <strong>TDS Turbidity</strong> Sensor, dan <strong>Suhu</strong> DS18B20.</P>
        <br>

        <?php include('navbar.php'); ?>

        <br>

        <div class="card-header bg-white">
            <h5 class="text-center">Data Statistik</h5>
        </div>
        <div class="card-body">
            <h1 class="card-text text-center">
                <?php include('chart.php'); ?>
            </h1>
        </div>




    </div>
</body>

</html>