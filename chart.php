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
    var ctx = document.getElementById('myChart').getContext('2d')
</script>