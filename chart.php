<canvas id="myChart"></canvas>
<?php
    include('config/connection.php');
    include('design/design.php');
    
    // Inisialisasi Data
    $data1 = mysqli_query($connection, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
    $data2 = mysqli_query($connection, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
    $data3 = mysqli_query($connection, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
    $data4 = mysqli_query($connection, "SELECT * FROM data ORDER BY no DESC LIMIT 20");
?>

<script>
    /**
     * Inisialisasi Variabel
     */
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx,{
        // Type of Chart
        type: 'line',
        
        data: {
            labels: [
                <?php
                while($row1 = mysqli_fetch_array($data1)){
                    $waktu = "'" . $row1['waktu'] . "'" . ",";
                    echo $waktu;
                }
                ?>
            ],
            datasets: [{
                label: 'PH',
                borderColor: 'rgb(75, 192, 192)',
                data: [
                    <?php
                    while($row2 = mysqli_fetch_array($data2)){
                        $ph = $row2['ph'] . ",";
                        echo $ph;
                    }
                    ?>
                ]
            },
            {
                label: 'TDS',
                borderColor: '#454743',
                data: [
                    <?php
                    while($row3 = mysqli_fetch_array($data3)){
                        $tds = $row3['tds'] . ",";
                        echo $tds;
                    }
                    ?>
                ]   
            }
        ]
        },

        // Configuration options go here
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            }
        },
    });

        
</script>