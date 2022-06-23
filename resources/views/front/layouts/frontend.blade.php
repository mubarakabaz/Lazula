<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{asset('front/images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('front/style.css')}}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{asset('front/css/colors.css')}}" rel="stylesheet">
<link href="{{asset('css/myapp.css')}}" rel="stylesheet">


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="{{asset('front/images/loader.gif')}}" alt="">
        
    </div> -->
    <!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- Search Bar & Top Bar -->
        @include('front.includes.topbar')

        <!-- Logo Header & Navbar -->
        @include('front.includes.header')

        <!-- Slide Post -->
        @include('front.includes.slidepost')

        <section class="section wb">
            @yield('content')
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Recent Post -->
                    @include('front.includes.recentpost')

                    <!-- Popular Post -->
                    @include('front.includes.popularpost')


                    <!-- Popular Categories -->
                    @include('front.includes.popularkategori')

                </div><!-- end row -->

                <hr class="invis1">

                <!-- Footer Content -->
                @include('front.includes.footer')

            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class='back-to-top' id='back-to-top' title='Back to top'>
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                class="bi bi-arrow-up-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    @include('front.includes.script')

</body>

</html>
