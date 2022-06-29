@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Edit Kategori: <i>{{ $kategori->nama_kategori }}</i> </h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Kategori
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('kategori.index') }}" class="btn app-btn-warning">
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

                    <form class="settings-form" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kategori" class="form-label"><h5>Nama Kategori</h5></label>
                            <input type="text" name="nama_kategori" class="form-control" id="text" value="{{ $kategori->nama_kategori }}" placeholder="Masukkan nama kategori yang baru">
                        </div>
                        
                        <button type="submit" class="btn app-btn-primary">Save</button>
                    </form>

                </div>
                <!--//app-card-body-->
            </div>
        </div>
        <!--//app-card-body-->
    </div>
</div>

@endsection
