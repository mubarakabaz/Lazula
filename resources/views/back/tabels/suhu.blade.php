@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title">Sensor Suhu</h1>

    <div class="row g-4 mb-4">
        <div class="app-card app-card-chart h-60 shadow-sm">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">Grafik Sensor</h4>
                    </div>
                    <!--//col-->
                    <div class="col-auto">

                        <!--//card-header-actions-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
                
                <div class="chart-container">
                    <!-- <canvas id="canvas-linechart"></canvas> -->
                    <canvas id="suhuLineChart"></canvas>
                </div>

                <script>
                    
                </script>
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>

</div>

@endsection
