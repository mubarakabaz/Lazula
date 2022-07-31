@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Setting Larutan Nutrisi: </h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Kalibrasi
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('kalibrasi.index') }}" class="btn app-btn-warning">
                            <i class="bi bi-arrow-counterclockwise"></i> Batal</a>
                    </div>
                    <!--//card-header-actions-->
                </div>
                <!--//col-->
            </div>
        </div>
        <!--//app-card-header-->
        <div class="app-card-body p-3 p-lg-4">
            <div class="app-card app-card-orders-table shadow-sm">
                <div class="app-card-body">
                    <h4 class="text-center mt-2 display-6">Sesuaikan kadar larutan nutrisi tanaman anda</h4>
                    <form class="settings-form" method="POST" action="{{ route('kalibrasi.update', $kalibrasi->id) }}"
                        style=" margin: 50px 50px;">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="phSetA" class="form-label">
                                <h5>pH Min</h5>
                            </label>
                            <input type="text" name="phSetA" class="form-control" id="text"
                                value="{{ $kalibrasi->phSetA }}">
                        </div>

                        <div class="mb-3">
                            <label for="phSetA" class="form-label">
                                <h5>pH Max</h5>
                            </label>
                            <input type="text" name="phSetA" class="form-control" id="text"
                                value="{{ $kalibrasi->phSetB }}">
                        </div>

                        <div class="mb-3">
                            <label for="tdsSetA" class="form-label">
                                <h5>tds Min</h5>
                            </label>
                            <input type="text" name="tdsSetA" class="form-control" id="text"
                                value="{{ $kalibrasi->tdsSetA }}">
                        </div>

                        <div class="mb-3">
                            <label for="tdsSetB" class="form-label">
                                <h5>tds Max</h5>
                            </label>
                            <input type="text" name="tdsSetB" class="form-control" id="text"
                                value="{{ $kalibrasi->tdsSetB }}">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn app-btn-primary">Save</button>
                        </div>
                    </form>

                </div>
                <!--//app-card-body-->
            </div>
        </div>
        <!--//app-card-body-->
    </div>
</div>

@endsection
