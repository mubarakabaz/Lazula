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
            <h5 class="text-center">Setting</h5>
        </div>
        <div class="card-body">
            <?php
            include('koneksi.php');
            $data   = mysqli_query($koneksi, "SELECT * FROM edit WHERE no='1'");
            $row    = mysqli_fetch_array($data);
            $phSetA  = $row['phSetA'];
            $phSetB  = $row['phSetB'];
            $ppmSetA    = $row['ppmSetA'];
            $ppmSetB    = $row['ppmSetB'];
            ?>
            <div class="row">
                <div class="col-sm">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>Selamat Datang di Halaman Setting</h4>
                            <p>Sebelum melakukan <b>Setting</b> untuk <b>SET PPM</b> dan <b>SET PH</b> yang di inginkan, pastikan alat dalam <b>Mode SET</b>. silakan ubah dengan menekan <b>Tombol MODE</b> 1x.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <form method="POST" action="settingProses.php">
                        <div class="form-group">
                            <label><b> phSetA </b></label>
                            <input class="form-control" name="phSetA" placeholder="phSetA..." value="<?php echo $phSetA; ?>">
                        </div>
                        <div class="form-group">
                            <label><b> phSetB </b></label>
                            <input class="form-control" name="phSetB" placeholder="phSetB..." value="<?php echo $phSetB; ?>">
                        </div>
                        <div class="form-group">
                            <label><b> ppmSetA </b></label>
                            <input class="form-control" name="ppmSetA" placeholder="ppmSetA..." value="<?php echo $ppmSetA; ?>">
                        </div>
                        <div class="form-group">
                            <label><b> ppmSetB </b></label>
                            <input class="form-control" name="ppmSetB" placeholder="ppmSetA..." value="<?php echo $ppmSetB; ?>">
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>