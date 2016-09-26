<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>App Name - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{ url('/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/css/vendor/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ url('/css/style.css')}}">
    <script src="{{ url('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>


@if (empty($class))
  <body>
@else
  <body class="{{$class}}">
@endif
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @yield('navbar')
    <!-- Page content start -->
    <section id="page-content">
    @yield('container')

    @yield('footer')

  </section>
  <!-- Page content start -->


    <script src="{{ url ('/js/vendor/jquery.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="{{ url ('/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ url ('/js/main.js') }}"></script>
</body>

</html>
