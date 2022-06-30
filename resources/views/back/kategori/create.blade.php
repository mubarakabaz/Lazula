@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Form Kategori</h1>

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
                        <a href="{{ route('kategori.index') }}" class="btn app-btn-warning"> <span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                </svg></span> Batal</a>
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

                    <form class="settings-form" method="POST" action="{{ route('kategori.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">
                                <h5>Nama Kategori</h5>
                            </label>
                            <input type="text" name="nama_kategori" class="form-control" id="text" required=""
                                placeholder="Masukkan nama kategori yang baru">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg app-btn-primary mt-2">Save</button>
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
