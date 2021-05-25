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
            <h5 class="text-center">Data Tabel</h5>
        </div>
        <div class="card-body">
            <h1 class="card-text text-center">
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">PH</th>
                            <th scope="col">PPM</th>
                            <th scope="col">PU</th>
                            <th scope="col">PD</th>
                            <th scope="col">NA</th>
                            <th scope="col">NB</th>
                            <th scope="col">Suhu</th>
                        </tr>
                    </thead>
                    <?php
                    include('koneksi.php');
                    $no = 0;
                    $data = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
                    while ($row        = mysqli_fetch_array($data)) {
                        $no++;
                        $nomor      = $row['no'];
                        $tanggal    = $row['tanggal'];
                        $waktu      = $row['waktu'];
                        $ph         = $row['ph'];
                        $ppm        = $row['tds'];
                        $pu         = $row['pompaPHNaik'];
                        $pd         = $row['pompaPHTurun'];
                        $na         = $row['pompaNutrisi'];
                        $nb         = $row['pompaAirBaku'];
                        $suhu       = $row['temperature'];
                    ?>
                        <tbody>
                            <tr>
                                <!-- <th scope="row"><?php echo $no; ?></th> -->
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $tanggal; ?></td>
                                <td><?php echo $waktu; ?></td>
                                <td><?php echo $ph; ?></td>
                                <td><?php echo $ppm; ?></td>
                                <td><?php echo $suhu; ?></td>
                                <td><?php
                                    if ($pu == 1)
                                        echo "<div class='text-success'>" . "ON" . "</div>";
                                    else
                                        echo "<div class='text-danger'>" . "OFF" . "</div>";
                                    ?></td>
                                <td><?php
                                    if ($pd == 1)
                                        echo "<div class='text-success'>" . "ON" . "</div>";
                                    else
                                        echo "<div class='text-danger'>" . "OFF" . "</div>";
                                    ?></td>
                                <td><?php
                                    if ($na == 1)
                                        echo "<div class='text-success'>" . "ON" . "</div>";
                                    else
                                        echo "<div class='text-danger'>" . "OFF" . "</div>";
                                    ?></td>
                                <td><?php
                                    if ($nb == 1)
                                        echo "<div class='text-success'>" . "ON" . "</div>";
                                    else
                                        echo "<div class='text-danger'>" . "OFF" . "</div>";
                                    ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </h1>
        </div>




    </div>
</body>

</html>