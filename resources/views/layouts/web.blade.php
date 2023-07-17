<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Amarou - Construction And Building Template">
  <link href="{{ asset('assets/images/favicon/favicon.png')}}" rel="icon">
  <title>Equable Home Service in Minnesota</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{{ asset('assets/css/libraries.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="spinner"><span class="cube1"></span><span class="cube2"></span></div>
    </div><!-- /.preloader -->
    <x-layouts.header />
    <main class="py-4">
        @yield('content')
    </main>
    <x-layouts.footer />

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>