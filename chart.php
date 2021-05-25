<canvas id="myChart"></canvas>

<?php
include('koneksi.php');
include('desain.php');
$data1 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
$data2 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
$data3 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
$data4 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
?>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
                <?php
                while ($row1 = mysqli_fetch_array($data1)) {
                    $waktu = "'" . $row1['waktu'] . "'" . ",";
                    echo $waktu;
                }
                ?>
            ],
            datasets: [{
                    label: 'PH',
                    borderColor: '#3498db',
                    data: [
                        <?php
                        while ($row2 = mysqli_fetch_array($data2)) {
                            $ph = $row2['ph'] . ",";
                            echo $ph;
                        }
                        ?>
                    ]
                },
                {
                    label: 'TDS',
                    borderColor: '#2ecc71',
                    data: [
                        <?php
                        while ($row3 = mysqli_fetch_array($data3)) {
                            $tds = $row3['tds'] . ",";
                            echo $tds;
                        }
                        ?>
                    ]
                }
            ]
        },

        // Configuration options go here
        options: {}
    });
</script>