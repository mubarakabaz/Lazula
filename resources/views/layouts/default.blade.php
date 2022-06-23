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
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <x-head.tinymce-config/>


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
    @include('includes.scriptsjs')
    @include('sweetalert::alert')

</body>

</html>
