<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Dashboard, Mio, Mubarakabaz">
    <meta name="author" content="Abdul Aziz Mubarak">
    <link rel="shortcut icon" href="{{ asset('back/images/icon/m-2.ico') }}">

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('back/css/portal.css') }}">

    <!-- Style Modif by Me -->
    <link rel="stylesheet" href="{{asset('css/myapp.css')}}">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/nkhvpn19cyi6agyy31l3vg524rrekazggz7ii54bnn27lsdf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tinymce-config.js') }}"></script>
    
</head>

<body class="app">

    <!-- Header with Sidebar -->
    @include('includes.header')

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <!-- Isi Content -->
            @yield('content')
            <!-- end Isi Content -->
        </div>
        <!--//app-content-->

        <!-- Footer -->
        @include('includes.footer')
        <!--//app-footer-->

    </div>
    <!--//app-wrapper-->


    <!-- Script -->
    @include('includes.scriptjs')
    @include('sweetalert::alert')
    

</body>

</html>
