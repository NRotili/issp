<x-app-layout>
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Robótica</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Carreras</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Robótica</li>
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
                    <a href="http://issp.edu.ar/PlanTSR.pdf" target="_blank"><div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Plan de Estudios</h5>
                            <p>Técnico Superior en Robótica</p>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="http://issp.edu.ar/NormaTSR.pdf" target="_blank">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Normativa</h5>
                            <p>Técnico Superior en Robótica</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="http://issp.edu.ar/Folleto_Robotica.JPG" target="_blank">
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('images/about.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Técnico Superior en Robótica</h6>
                    <p align="justify" class="mb-4">La carrera de Técnico Superior en Robótica que allí se dicta tiene una duración de 3 años, con un título terciario con validez oficial y expedido por el Ministerio de Educación de la provincia de Santa Fe.
                    </p>
                    <p align="justify" class="mb-4">Tiene como finalidad formar al alumno para el buen desempeño en actividades preferentemente industriales, conforme a la demanda existente en nuestra zona. Aquí se estudian y aplican conocimientos de electricidad, electrónica y mecánica que en forma combinada y conjuntamente con otras disciplinas abordadas permiten al alumno construir y/o controlar dispositivos automatizados capaces de realizar procesos.
                    </p>

                    <p align="justify" class="mb-4">Esta situación que se presenta especialmente en los ámbitos industriales es la que tiene por objeto de estudio a la carrera de Técnico Superior en Robótica, que brindando herramientas teóricas y prácticas similares a las de uso en la industria capacita al alumno para un desempeño más jerarquizado en los ámbitos industriales. En tal sentido, buena parte del plantel docente se encuentra constituida por profesionales ingenieros con actividad en empresas en las que se aplica este tipo de prácticas, y que vuelcan a los alumnos su experiencia en la actividad laboral.
                    </p>
                   
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                     <p align="justify" class="mb-4">El Instituto cuenta desde el año 2010 con una instalación en laboratorio de una celda manufacturera de última generación controlado mediante un equipo computarizado, el cual cuenta con todas las características técnicas que presenta este tipo de equipos en las industrias. Este equipamiento incluye un sistema de control de mediciones y traslado de piezas, el cual es capaz de funcionar conjuntamente con el brazo robot ya instalado, y que integra una celda industrial que el Instituto amplía periódicamente hasta lograr su desarrollo completo.
                    </p>
                    
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                    <p align="justify" class="mb-4">Asimismo, existen 2 laboratorios más en el Instituto en los que se desarrollan las prácticas de electrónica y control de equipos del tipo PLC (controladores lógicos programables) como parte de las asignaturas que se desarrollan normalmente.
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
                            <img class="img-fluid" src="{{asset('images/team-1.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <img class="img-fluid" src="{{asset('images/team-2.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <img class="img-fluid" src="{{asset('images/team-3.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <img class="img-fluid" src="{{asset('images/team-4.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
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
