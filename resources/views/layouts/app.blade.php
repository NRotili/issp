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

    <script src="https://kit.fontawesome.com/492b538ce5.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
</head>

<body>
    <x-jet-banner />

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    @livewire('navigation')




    <main>
        {{ $slot }}
    </main>

    <!-- Footer Start -->
    <footer>
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-3">Link directos</h4>
                        <a class="btn btn-link" href="{{route('index')}}">Home</a>
                        <a class="btn btn-link" href="{{route('sobre-nosotros')}}">Institución</a>
                        <a class="btn btn-link" href="">Carreras</a>
                        <a class="btn btn-link" href="{{route('contacto')}}">Contactanos</a>
       
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-3">Contacto</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>14 de Febrero 1262, V. Const.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="call:3400474025">03400 - 474025</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:secretaria@issp.edu.ar">secretaria@issp.edu.ar</a></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://wa.me/+5493364237667"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/issp9112"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/issp9112/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53391.32422471541!2d-60.36333356528205!3d-33.241409893364676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b76c4760812d55%3A0xbb412b3c67ec6e48!2sVilla%20Constituci%C3%B3n%2C%20Santa%20Fe!5e0!3m2!1ses!2sar!4v1651680657305!5m2!1ses!2sar"
                        frameborder="0" style="min-height: 100px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                        {{-- <h4 class="text-white mb-3">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{route('index')}}">{{ config('app.name', 'ISSP - 9112') }}</a>, All Right Reserved.
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{route('index')}}">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Ayuda</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @stack('modals')

    @livewireScripts

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('lib/wow/wow.min.js')}}"></script>
      <script src="{{asset('lib/easing/easing.min.js')}}"></script>
      <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
      <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  
      <!-- Template Javascript -->
      <script src="{{asset('js/main.js')}}"></script>

</body>


</html>
