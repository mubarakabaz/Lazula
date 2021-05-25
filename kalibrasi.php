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
            <h5 class="text-center">Kalibrasi</h5>
        </div>
        <div class="card-body">
            <?php
            include('koneksi.php');
            $data   = mysqli_query($koneksi, "SELECT * FROM edit WHERE no='1'");
            $row    = mysqli_fetch_array($data);
            $kalibrasiPh    = $row['kalibrasiPh'];
            $kalibrasiPpm   = $row['kalibrasiPpm'];
            ?>
            <div class="row">
                <div class="col-sm">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>Selamat Datang di Halaman Kalibrasi</h4>
                            <p>Sebelum melakukan <b>Setting</b> untuk <b>SET PPM</b> dan <b>SET PH</b> yang di inginkan, pastikan alat dalam <b>Mode SET</b>. silakan ubah dengan menekan <b>Tombol MODE</b> 1x.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <form method="POST" action="kalibrasiProses.php">
                        <div class="form-group">
                            <label><b> Kalibrasi PH </b></label>
                            <input class="form-control" name="kalibrasiPh" placeholder="Nilai Kalibrasi Ph..." value="<?php echo $kalibrasiPh; ?>">
                        </div>
                        <div class="form-group">
                            <label><b> Kalibrasi PPM </b></label>
                            <input class="form-control" name="kalibrasiPpm" placeholder="Nilai Kalibrasi Ppm..." value="<?php echo $kalibrasiPpm; ?>">
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>