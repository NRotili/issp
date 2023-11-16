<x-app-layout>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header-gestion">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Gestión Industrial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Carreras</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Gestión Industrial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{asset('docs/TSGI.pdf')}}" target="_blank">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                <h5 class="mb-3">Plan de Estudios</h5>
                                <p>Técnico en Gestión Industrial</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="http://issp.edu.ar/NormaTSC.pdf" target="_blank">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                                <h5 class="mb-3">Normativa</h5>
                                <p>Técnico en Comercialización</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="http://issp.edu.ar/Folleto_Marketing.JPG" target="_blank">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-home text-primary mb-4"></i>
                                <h5 class="mb-3">Tríptico</h5>
                                <p>Publicidad</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Técnico Superior en Comercialización
                    </h6>
                    <p align="justify" class="mb-4">La carrera de Técnico Superior en Comercialización tiene
                        una duración de 3 años, con un título terciario con validez oficial y expedido por el Ministerio
                        de Educación de la provincia de Santa Fe.
                    </p>
                    <p align="justify" class="mb-4">Tiene como finalidad formar al alumno para que desarrolle
                        competencias que le permitan desempeñarse adecuadamente en la organización y gestión de ventas
                        de todo tipo de organizaciones. Durante el cursado de la carrera el alumno adquiere
                        conocimientos de administración, técnicas de análisis de psicología del consumidor, economía,
                        desarrollo de productos, y otras disciplinas.
                    </p>

                    <p align="justify" class="mb-4">Las disciplinas citadas permiten entonces, que el alumno
                        tenga un acercamiento que va más allá del proceso de comercialización de bienes o servicios de
                        cara a clientes, sino que además permite a alumno formarse en conceptos de management y
                        consultoría de organizaciones que tienen acercamiento a funciones gerenciales o de mandos medios
                        en diversas organizaciones. La carrera de Técnico Superior en Comercialización permite de esta
                        forma que el alumno pueda desempeñarse tanto en organizaciones comerciales como industriales, de
                        servicios y sin fines de lucro. Al igual que en las demás carreras que se dictan en el
                        Instituto, también en esta carrera buena parte del plantel docente se encuentra constituida por
                        profesionales con actividad en empresas en las que se aplica este tipo de prácticas, y que
                        vuelcan a los alumnos su experiencia en la actividad laboral. Es por todo esto que la carrera de
                        Técnico Superior en Comercialización de nuestro Instituto, posee características que la hacen
                        única en la zona.

                    </p>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('images/about.jpg') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                

                <div align="justify" class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">El instituto periódicamente organiza además actividades extraprogramáticas
                        sobre aspectos relacionados con la comercialización y el management organizacional, destinados
                        no solamente a alumnos sino también a participantes no pertenecientes a la Institución.
                    </p>

                </div>
               
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Docentes</h6>
                <h1 class="mb-5">Nuestro Plantel</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/team-1.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/team-2.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/team-3.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/team-4.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


</x-app-layout>
