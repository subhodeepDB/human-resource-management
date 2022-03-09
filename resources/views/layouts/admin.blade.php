<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRMS | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <!-- CSS JS Dependency -->
    @yield('datatable_assets')

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css"> --}}
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->
      
    @include('layouts.partials.header')
    @extends('layouts.partials.sidebar')
    
    @yield('content')
    
    @extends('layouts.partials.footer')
      
  </div>
  <!-- ./wrapper -->    
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ mix('js/popper.js') }}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script> --}}
  @include('sweetalert::alert')
  <!-- Inicial datatable here -->    
  @yield('datatable')
</body>
</html>