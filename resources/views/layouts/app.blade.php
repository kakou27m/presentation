<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ordyra - @yield('currentPage')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/vendors/base/vendor.bundle.base.css')}}">

  <link rel="stylesheet" href="{{asset('dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('dashboard/vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/vendors/jquery-bar-rating/fontawesome-stars.css')}}">

  <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">

  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
  @livewireStyles
</head>
<body>


  @if (Auth()->check())
    @livewire('client.header')
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @livewire('client.sidebar')
        
    @endif
    @yield('content')
    <!-- partial -->
    <!-- main-panel ends -->
  </div>


    <script src="{{asset('dashboard/vendors/base/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('dashboard/js/off-canvas.js')}}"></script>
    <script src="{{asset('dashboard/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dashboard/js/template.js')}}"></script>
    {{-- <script src="v{{asset('dashbaord/endors/chart.js/Chart.min.js')}}"></script> --}}
    <script src="{{asset('dashboard/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('dashboard/js/dashboard.js')}}"></script>

    @yield('script')
   
    @livewireScripts
</body>
</html>