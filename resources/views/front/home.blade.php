@extends('front.layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="{{asset('front/upload/banner_01.jpg')}}" alt="">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="blog-grid-system">
                    <div class="row">
                        @forelse ($artikel as $row)
                        <div class="col-md-6">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('detail-artikel', $row->slug) }}" title="">
                                        <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" alt="" class="img-fluid" style="max-height: 300px; overflow: hidden;">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a href="{{ route('detail-artikel', $row->slug) }}" title="">{{ $row->judul }}</a>
                                    </h4>
                                    <p>{!! $row->excerpt !!}</p>
                                    <small><a href="{{ route('detail-artikel', $row->slug) }}" title="">{{ $row->kategori->nama_kategori }}</a></small>
                                    <small><a href="{{ route('detail-artikel', $row->slug) }}" title="">by {{ $row->users->name }}</a></small>
                                    <small><a href="{{ route('detail-artikel', $row->slug) }}" title="">{{ $row->created_at }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
                        @empty
                            Artikel Belum Tersedia
                        @endforelse
                        

                    </div><!-- end row -->
                </div><!-- end blog-grid-system -->
            </div><!-- end page-wrapper -->

            <hr class="invis3">

            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar">
                
                <!-- Widget Recent Post -->
                <x-widget.recent-post recent="recent-post" />


                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="#">Fahsion <span>(21)</span></a></li>
                            <li><a href="#">Lifestyle <span>(15)</span></a></li>
                            <li><a href="#">Art & Design <span>(31)</span></a></li>
                            <li><a href="#">Health Beauty <span>(22)</span></a></li>
                            <li><a href="#">Clothing <span>(66)</span></a></li>
                            <li><a href="#">Entertaintment <span>(11)</span></a></li>
                            <li><a href="#">Food & Drink <span>(87)</span></a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end sidebar -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->

@endsection
