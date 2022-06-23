@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Form Artikel</h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Artikel
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('artikel.index') }}" class="btn app-btn-warning"> <span class="nav-icon"><svg
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

                    <form class="settings-form" method="POST" action="{{ route('artikel.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 from-group">
                            <label for="judul" class="form-label">
                                <h6>Judul Artikel</h6>
                            </label>
                            <input type="text" name="judul" class="form-control" id="text" placeholder="Masukkan judul">
                        </div>

                        <div class="mb-3 from-group">
                            <label for="body" class="form-label">
                                <h6>Body Artikel</h6>
                            </label>
                            <textarea name="body" class="form-control" id="myeditorinstance"></textarea>
                        </div>

                        <div class="mb-3 from-group">
                            <label for="kategori" class="form-label">
                                <h6>Kategori Artikel</h6>
                            </label>
                            <select name="kategori_id" class="form-control">
                                
                                @foreach ($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                @endforeach
                        </div>

                        <div class="mb-3 mt-3 from-group">
                            <label for="gambar_artikel" class="form-label">
                                <h6>Gambar Artikel</h6>
                            </label>
                            <input type="file" name="gambar_artikel" class="form-control">
                        </div>

                        <div class="mb-3 from-group">
                            <label for="status" class="form-label">
                                <h6>Status Artikel</h6>
                            </label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>

                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end from-group">
                            <button type="submit" class="btn app-btn-primary"> Save </button>
                            <button type="reset" class="btn app-btn-danger"> Reset </button>
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
