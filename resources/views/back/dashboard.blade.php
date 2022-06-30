@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title">Overview</h1>

    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <h6>SELAMAT DATANG</h6>
                <h1 class="display-6 mb-3">{{ Auth::user()->name }}</h1>
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-lg-9">

                        <div>Selamat datang di aplikasi sistem monitoring larutan nutrisi hidroponik</div>

                    </div>
                </div>
                <!--//row-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--//app-card-body-->

        </div>
        <!--//inner-->
    </div>
    <!--//app-card-->

    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <div class="stats-figure" style="overflow: hidden;">
                        <h4 class="stats-type mb-1">Jenis Tanaman</h4>
                        <div class="stats-figure" style="color: green;">Sawi Hijau</div>
                    </div>

                </div>
                <!--//app-card-body-->

            </div>
        </div>
        <!--//col-->
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Sensor Suhu</h4>
                    <div class="stats-figure">
                        @forelse ($sensor as $data)
                        {{$data->suhu}}
                        @empty
                        0
                        @endforelse
                    </div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
        </div>
        <!--//col-->

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Sensor PH</h4>
                    <div class="stats-figure">
                        @forelse ($sensor as $data)
                        {{$data->ph}}
                        @empty
                        0
                        @endforelse
                    </div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Sensor TDS</h4>
                    <div class="stats-figure">
                        @forelse ($sensor as $data)
                        {{$data->tds}}
                        @empty
                        0
                        @endforelse
                    </div>

                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->


    </div>
    <!--//row-->

    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Pompa Air Baku</h4>
                    @forelse ($sensor as $data)
                    @if ($data->pab == 1)
                    <div class="stats-figure" style="color: #b8001c;">
                        ON
                    </div>
                    @else
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endif
                    @empty
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endforelse


                </div>
                <!--//app-card-body-->

            </div>
        </div>
        <!--//col-->
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Pompa Nutrisi</h4>
                    @forelse ($sensor as $data)
                    @if ($data->ppn == 1)
                    <div class="stats-figure" style="color: #b8001c;">
                        ON
                    </div>
                    @else
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endif
                    @empty
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endforelse


                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
        </div>
        <!--//col-->

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Pompa PH UP</h4>
                    @forelse ($sensor as $data)
                    @if ($data->ppu == 1)
                    <div class="stats-figure" style="color: #b8001c;">
                        ON
                    </div>
                    @else
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endif
                    @empty
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endforelse


                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-60">
                <div class="app-card-body p-3 p-lg-4">

                    <h4 class="stats-type mb-1">Pompa PH Down</h4>
                    @forelse ($sensor as $data)
                    @if ($data->ppd == 1)
                    <div class="stats-figure" style="color: #b8001c;">
                        ON
                    </div>
                    @else
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endif
                    @empty
                    <div class="stats-figure">
                        OFF
                    </div>
                    @endforelse


                </div>
                <!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div>
            <!--//app-card-->
        </div>
        <!--//col-->


    </div>
    <!--//row-->


    <div class="row g-4 mb-4">
        <div class="app-card app-card-chart h-100 shadow-sm">
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
                <!-- <div class="mb-3 d-flex">
                        <select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
                            <option value="1" selected>This week</option>
                            <option value="2">Today</option>
                            <option value="3">This Month</option>
                            <option value="3">This Year</option>
                        </select>
                    </div> -->
                <div class="chart-container">
                    <canvas id="canvas-linechart"></canvas>
                </div>
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>




    <div class="row g-4 mb-4">
        <div class="card full-height">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Artikel Terpopuler</div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
