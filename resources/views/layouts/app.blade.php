<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ISSP - 9112') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link href="{{asset('css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @livewireStyles

    <!-- Scripts -->
</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <x-jet-banner />

    <div class="site-wrap">
  
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
  
  
      <div class="py-2 bg-light">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
              <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Tenés alguna consulta?</a> 
              <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 03400 - 474025</a> 
              <a href="#" class="small mr-3"><span class="icon-whatsapp mr-2"></span> 0336 - 154237667</a> 
              <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
            </div>
            <div class="col-lg-3 text-right">
              <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Ingresar</a>
              <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Registrarse</a>
            </div>
          </div>
        </div>
      </div>

      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  
        @livewire('navigation')
  
      </header>


      <main>
        {{ $slot }}
    </main>
  
 
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
  
  
  
  
    <script src="{{asset('js/main.js')}}"></script>

    
    @stack('modals')

    @livewireScripts
  
  </body>




</html>
