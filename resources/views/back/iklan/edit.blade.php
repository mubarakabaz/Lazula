@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title"> Edit Iklan: <i>{{ $iklan->judul_iklan }}</i> </h1>

    <div class="app-card app-card-chart h-100 shadow-sm">
        <div class="app-card-header p-3">

            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">
                        <a href="{{ route('dashboard') }}"> Dashboard </a> /
                        Iklan
                    </h4>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <div class="card-header-action">
                        <a href="{{ route('iklan.index') }}" class="btn app-btn-warning">
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

                    <form class="settings-form" method="POST" action="{{ route('iklan.update', $iklan->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul_iklan" class="form-label"><h6>Judul</h6></label>
                            <input type="text" name="judul_iklan" class="form-control" id="text" value="{{ $iklan->judul_iklan }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="link_iklan" class="form-label"><h6>Link</h6></label>
                            <input type="text" name="link_iklan" class="form-control" id="text" value="{{ $iklan->link_iklan }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="gambar_iklan" class="form-label"><h6>Gambar</h6></label>
                            <input type="text" name="gambar_iklan" class="form-control" id="text" value="{{ $iklan->gambar_iklan }}">
                        </div>

                        <div class="mb-3 from-group">
                            <label for="gambar_iklan" class="form-label">
                                <h6>Gambar Iklan</h6>
                            </label>
                            <input type="file" name="gambar_iklan" class="form-control">
                            <br>
                            <img src="{{ asset('uploads/' . $iklan->gambar_iklan) }}" width="100">
                        </div>
                        
                        <div class="mb-3">
                            <label for="status" class="form-label"><h6>Status</h6></label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $iklan->status == '1' ? 'selected' : '' }} > Publish </option>
                                <option value="0" {{ $iklan->status == '0' ? 'selected' : '' }} > Draft </option>
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
