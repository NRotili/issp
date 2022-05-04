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
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/492b538ce5.js" crossorigin="anonymous"></script>


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
                        <a href="" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Tenés
                            alguna consulta?</a>
                        <a href="call:3400474025" class="small mr-3"><span class="icon-phone2 mr-2"></span> 03400 - 474025</a>
                        <a href="https://wa.me/+5493364237667" class="small mr-3"><span class="icon-whatsapp mr-2"></span> 0336 - 154237667</a>
                        <a href="mailto:secretaria@issp.edu.ar" class="small mr-3"><span class="icon-envelope-o mr-2"></span>
                            secretaria@issp.edu.ar</a>
                    </div>
                    <div class="col-lg-3 text-right">
                        <a href="login" class="small mr-3"><span class="icon-unlock-alt"></span> Ingresar</a>
                        <a href="register" class="small btn btn-primary px-4 py-2 rounded-0"><span
                                class="icon-users"></span> Registrarse</a>
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


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="mb-4"><img src="{{asset('images/logo.png')}}" alt="Image" class="img-fluid"></p>
                        <p>Desde 1981 brindando educación de calidad.</p>
                        <p><a href="{{route('sobre-nosotros')}}">Leer más</a></p>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="footer-heading"><span>Campus</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Alumnos</a></li>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="{{route('sobre-nosotros')}}">Institución</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h3 class="footer-heading"><span>Carreras</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="{{route('pages.carreras.sistemas')}}">Sistemas</a></li>
                            <li><a href="#">Comercialización</a></li>
                            <li><a href="#">Robótica</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-4 ">
                        <h3 class="footer-heading"><span>Ubicación</span></h3>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.41826150304!2d-60.34264618480631!3d-33.22934418083788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b76c4f3bc27c87%3A0x29c3bd700b77d3c5!2sInstituto%20San%20Pablo!5e0!3m2!1ses!2sar!4v1651617730924!5m2!1ses!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#51be78" />
        </svg>
    </div>


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>



    <script src="{{ asset('js/main.js') }}"></script>


    @stack('modals')

    @livewireScripts

</body>


</html>
