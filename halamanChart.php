<html>

<head>
    <?php 
            // header("refresh:5");
            include('design/design.php');
        ?>
</head>

<body>
    <!-- Navs Top -->
    <nav class="mb-2">
        <?php include('design/navbar.php'); ?>
    </nav>

    <div class="card-header bg-white">
        <h5 class="text-center">Data Statistik</h5>
    </div>
    <div class="card-body">
        <h1 class="card-text text-center">
            <?php include('chart.php'); ?>
        </h1>
    </div>
</body>

</html>