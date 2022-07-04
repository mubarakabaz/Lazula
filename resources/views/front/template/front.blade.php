<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mubarakabaz</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('front/assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/assets/vendors/aos/dist/aos.css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('front/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet"
        href="{{asset('front/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css')}}" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon.png')}}" />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    <!-- endinject -->

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    

</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">

            @include('front.includes.header')

            <div class="container">
                
                @include('front.includes.slider')

                @yield('content')
            </div>

            @include('front.includes.footer')

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <script src="{{asset('front/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('front/assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('front/assets/js/demo.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>
