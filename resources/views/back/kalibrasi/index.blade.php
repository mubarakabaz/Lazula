@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Kalibrasi Larutan Nutrisi</h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kalibrasi Ulang Larutan Nutrisi</li>
                        </ol>
                    </nav>
                </div>
                <!--//col-->

            </div>
        </div>
        <!--//app-card-header-->
        <div class="app-card-body p-3 p-lg-4">
            <div class="app-card app-card-orders-table shadow-sm">
                <div class="app-card-body">

                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Terakhir Di Ubah</th>
                                <th class="cell">PH Min</th>
                                <th class="cell">PH Max</th>
                                <th class="cell">TDS Min</th>
                                <th class="cell">TDS Max</th>
                                <th class="cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kalibrasi as $row)
                            <tr>
                                <td class="cell">{{ $row->id }}</td>
                                <td class="cell">{{ $row->updated_at }}</td>
                                <td class="cell">{{ $row->phmin }}</td>
                                <td class="cell">{{ $row->phmax }}</td>
                                <td class="cell">{{ $row->tdsmin }}</td>
                                <td class="cell">{{ $row->tdsmax }}</td>
                                <td class="cell">
                                    <a href="{{ route('kalibrasi.edit', $row->id) }}" class="btn app-btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="cell">Data tidak ditemukan</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
                <!--//app-card-body-->
            </div>
        </div>
        <!--//app-card-body-->
    </div>

    

    <div class="row g-4 mb-4 mt-2">
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
</div>

@endsection
