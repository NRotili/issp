<div class="container">
    <div class="d-flex align-items-center">
        <div class="site-logo">
            <a href="index.html" class="d-block">
                <img src="{{asset('images/logo.jpg')}}" alt="Image" class="img-fluid">
            </a>
        </div>
        <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                        <a href="{{route('index')}}" class="nav-link text-left ">Home</a>
                    </li>
                    <li class="{{ (request()->is('sobre-nosotros')) ? 'active' : '' }}">
                        <a href="{{route('sobre-nosotros')}}" class="nav-link text-left ">Institución</a>
                        
                    </li>
                  
                    <li class="has-children {{ (request()->is('carreras/sistemas')) ? 'active' : ((request()->is('carreras/robotica')) ? 'active' : ((request()->is('carreras/comercializacion')) ? 'active':'') )}}">
                        <a href="about.html" class="nav-link text-left">Carreras</a>
                        <ul class="dropdown">
                            <li><a href="teachers.html">Comercialización</a></li>
                            <li><a href="about.html">Robótica</a></li>
                            <li class="{{ (request()->is('carreras/sistemas')) ? 'active' : '' }}"><a href="{{route('pages.carreras.sistemas')}}">Sistemas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="nav-link text-left">Contacto</a>
                    </li>
                </ul>
                </ul>
            </nav>

        </div>
        <div class="ml-auto">
            <div class="social-wrap">
                <a href="https://facebook.com/issp9112" target="_blank"><span class="icon-facebook"></span></a>
                <a href="https://instagram.com/issp9112" target="_blank"><span class="icon-instagram"></span></a>

                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a>
            </div>
        </div>

    </div>
</div>
