@extends('layouts.default')
@section('content')

<div class="container-xl">

    <h1 class="app-page-title">{{ __('Tutorial') }}</h1>

    <div class="row g-4 mb-4">
        @forelse ($tutorial as $col)
        <div class="col-12 col-lg-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div style="width: 300px; max-height: 200px; overflow:hidden;" class="align-items-center gx-3">
                        <img src="{{ asset('uploads/' . $col->gambar_artikel) }}" class="card-img-top">
                    </div>
                    <div class="row align-items-center gx-3">

                        <!--//col-->
                        <div class="col-auto mt-4">
                            <h4 class="app-card-title">
                                <a href="{{ route('detail-artikel', $col->slug) }}">
                                    {{ $col->judul }}
                                </a>
                            </h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4">

                    <div class="intro">{!! $col->excerpt !!}</div>
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">ReadMore</a>
                </div>
                <!--//app-card-footer-->
            </div>
            <!--//app-card-->
        </div>

        @empty

        <div class="col-12 col-lg-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <img src="https://dummyimage.com/300x200/a6a4a6/fff.jpg" alt="">
                            <div class="app-icon-holder">
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Artikel Pertama</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4">

                    <div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        aliquet eros vel diam semper mollis.</div>
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">Create New</a>
                </div>
                <!--//app-card-footer-->
            </div>
            <!--//app-card-->
        </div>

        <div class="col-12 col-lg-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <img src="https://dummyimage.com/300x200/a6a4a6/fff.jpg" alt="">
                            <div class="app-icon-holder">
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Artikel Kedua</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4">

                    <div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        aliquet eros vel diam semper mollis.</div>
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">Create New</a>
                </div>
                <!--//app-card-footer-->
            </div>
            <!--//app-card-->
        </div>

        <div class="col-12 col-lg-4">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <img src="https://dummyimage.com/300x200/a6a4a6/fff.jpg" alt="">
                            <div class="app-icon-holder">
                            </div>
                            <!--//icon-holder-->

                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Artikel Ketiga</h4>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4">

                    <div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        aliquet eros vel diam semper mollis.</div>
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">Create New</a>
                </div>
                <!--//app-card-footer-->
            </div>
            <!--//app-card-->
        </div>

        @endforelse
    </div>

</div>

@endsection
