<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('front/images/logo-mubarakabaz.png') }}" alt=""></a>
                </div><!-- end logo -->
            </div>
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end header -->

<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
                aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown has-submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Kategori</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            @foreach ($kategori as $cat)
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover"
                                    href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ url('about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ url('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->
