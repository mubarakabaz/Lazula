@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title">{{ $artikel->judul }}</h1>

    <div class="container-fluid">
        
    </div>

    <div class="row g-4 mb-4">
        <div class="app-card app-card-basic d-flex flex-column shadow-sm">
            <div class="app-card-title px-4 mt-2">
                {{ $artikel->excerpt }}
            </div>
            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="img-fluid mt-4" alt="...">

            <!--//app-card-header-->
            <div class="app-card-body px-4">

                <div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                    aliquet eros vel diam semper mollis.</div>
            </div>

            <!--//app-card-footer-->
        </div>

    </div>

</div>

@endsection
