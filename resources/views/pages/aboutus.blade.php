<x-app-layout>
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Institución</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Institución</a></li>
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
            
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Carreras</h6>
        <h1 class="mb-5">Nuestras tecnicaturas</h1>
    </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{route('pages.carreras.robotica')}}" ><div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Téc. en Robótica</h5>
                            <p></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{route('pages.carreras.gestion-industrial')}}" >
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Téc. en Gestión Industrial</h5>
                            <p></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{route('pages.carreras.sistemas')}}" >
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Téc. en Análisis Func. de Sist.
                            </h5>
                            <p></p>
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
                    <h6 class="section-title bg-white text-start text-primary pe-3">Instituto Superior San Pablo Nº 9112</h6>
                    <p align="justify" class="mb-4">Nació en el año 1981 con la finalidad de proveer a los alumnos egresados de las diferentes escuelas secundarias de la ciudad y de la región de una alternativa local para ampliar sus capacidades y aptitudes en cuanto a desempeño en el mercado laboral.
                    </p>
                    <p align="justify" class="mb-4">Esta finalidad se vio permanentemente favorecida desde su fundación, por el aporte del plantel docente que en la mayoría de los casos contaba y cuenta además con desempeño en diferentes ámbitos industriales, comerciales y de servicios. Este plus de experiencia puesto al servicio de los alumnos fue y sigue siendo una característica distintiva de la Institución.
                    </p>

                    <p align="justify" class="mb-4">La visión del fundador, Monseñor Samuel Martino, transmitió desde un primer momento la idea de la formación técnica fundada en la fe y los valores del respeto por el otro, la solidaridad, el trabajo mancomunado, y con puertas abiertas a toda la comunidad. A lo largo de los años, se busca mantener estos valores en nuestros alumnos, sin que ello signifique restar importancia al carácter técnico de las disciplinas abordadas. Es por ello que en todas las carreras dictadas en la Institución se abordan conocimientos que permiten al alumno egresado desempeñarse en los mandos medios de organizaciones, a la vez que cuentan con la posibilidad de continuar sus estudios universitarios con una adecuada formación de base.
                    </p>
                   
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                     <p align="justify" class="mb-4">Desde el punto de vista de su conformación legal, el Instituto es una entidad educativa pública de gestión privada, incorporada a la enseñanza oficial de la Nación desde 1983 y de la Provincia de Santa Fe desde 1995, estando en consecuencia su actividad, planes de estudio y desarrollo de contenidos sujetos a control ministerial. Esta condición le permite otorgar títulos de nivel terciario con validez nacional conforme a cada una de las normas antes citadas. La Entidad Propietaria es el Arzobispado de Rosario, quien designa a los fines de representación a un Representante Legal con facultades suficientes.
                    </p>
                    <p align="justify" class="mb-4">Los planes de estudio que componen las diferentes carreras cuentan con actualización de contenidos a cargo de los docentes, quienes evalúan anualmente el estado del arte en las diferentes disciplinas abordadas incorporando nuevos contenidos y tecnologías al desarrollo curricular. Asimismo, la participación en el Régimen de Crédito Fiscal para capacitación de la ley 22.317 permite al Instituto incorporar tecnología de vanguardia para el abordaje de contenidos, manteniendo el up to date del equipamiento.
                    </p>
                    <p align="justify" class="mb-4">No menos importante para la Institución es el establecimiento de lazos de cooperación con diferentes instituciones de la comunidad. En tal sentido, en reiteradas oportunidades se han realizado eventos abiertos a diferentes sectores de la comunidad, abordando temáticas tales como operación básica de equipos de computación, capacitación en equipamiento de robótica, capacitación en ventas y elementos de marketing.
                    </p>
                    
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('images/about.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    

    
</x-app-layout>