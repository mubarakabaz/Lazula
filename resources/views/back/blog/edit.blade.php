@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Edit Artikel: <i>{{ $artikel->judul }}</i> </h1>

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
                        <a href="{{ route('artikel.index') }}" class="btn app-btn-warning">
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

                    <form class="settings-form" method="POST" action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 form-group">
                            <label for="judul" class="form-label"><h5>Judul Artikel</h5></label>
                            <input type="text" name="judul" class="form-control" id="text" value="{{ $artikel->judul }}">
                        </div>

                        <div class="mb-3 form-group">
                            <label for="body" class="form-label"><h5>Body Artikel</h5></label>
                            <textarea name="body" class="form-control" id="myeditorinstance">{{ $artikel->body }}</textarea>
                        </div>

                        <div class="mb-3 from-group">
                            <label for="kategori" class="form-label">
                                <h6>Kategori Artikel</h6>
                            </label>
                            <select name="kategori_id" class="form-control">
                                
                                @foreach ($kategori as $row)
                                @if ($row->id == $artikel->kategori_id)
                                <option value="{{ $row->id }}" selected="selected">{{ $row->nama_kategori }}</option>
                                @else
                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                @endif
                                
                                @endforeach
                        </div>

                        <div class="mb-3 from-group">
                            <label for="gambar_artikel" class="form-label">
                                <h6>Gambar Artikel</h6>
                            </label>
                            <input type="file" name="gambar_artikel" class="form-control">
                            <br>
                            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" width="100">
                        </div>

                        <div class="mb-3 from-group">
                            <label for="status" class="form-label">
                                <h6>Status Artikel</h6>
                            </label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ $artikel->is_active == '1' ? 'selected' : '' }} > Publish </option>
                                <option value="0" {{ $artikel->is_active == '0' ? 'selected' : '' }} > Draft </option>
                            </select>
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
