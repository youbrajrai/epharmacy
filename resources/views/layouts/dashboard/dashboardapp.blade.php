<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Pharmacy') }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/assets/img/favicon/favicon.ico')}}" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('dashboard/assets/vendor/js/helpers.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/config.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/boxicons.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->  
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/pages/page-auth.css')}}" />  
</head>
<body>
    <div id="dashboard-app">
        <body>
            @yield('content')
            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="{{asset('dashboard/assets/vendor/libs/jquery/jquery.js')}}"></script>
            <script src="{{asset('dashboard/assets/vendor/libs/popper/popper.js')}}"></script>
            <script src="{{asset('dashboard/assets/vendor/js/bootstrap.js')}}"></script>
            <script src="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        
            <script src="{{asset('dashboard/assets/vendor/js/menu.js')}}"></script>
            <!-- endbuild -->
        
            <!-- Vendors JS -->
            <script src="{{asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
        
            <!-- Main JS -->
            <script src="{{asset('dashboard/assets/js/main.js')}}"></script>
        
            <!-- Page JS -->
            <script src="{{asset('dashboard/assets/js/dashboards-analytics.js')}}"></script>
        
            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
        
          </body>
    </div>
</body>
</html>
