<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 "><img src="{{asset('images/logoTrans.png')}}" width="20%" class="m-3"alt=""></i>ISSP Nº 9112</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('sobre-nosotros') }}"
                class="nav-item nav-link {{ request()->is('sobre-nosotros') ? 'active' : '' }}">Institución</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ request()->is('carreras/sistemas') ? 'active' : (request()->is('carreras/robotica') ? 'active' : (request()->is('carreras/comercializacion') ? 'active' : '')) }}"
                    data-bs-toggle="dropdown">Carreras</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('pages.carreras.gestion-industrial')}}" class="dropdown-item {{ request()->is('carreras/gestion-industrial') ? 'active' : '' }}">Gestión Industrial</a>
                    <a href="{{ route('pages.carreras.robotica')}}" class="dropdown-item {{ request()->is('carreras/robotica') ? 'active' : '' }}">Robótica</a>
                    <a href="{{ route('pages.carreras.sistemas') }}"
                        class="dropdown-item {{ request()->is('carreras/sistemas') ? 'active' : '' }}">Sistemas</a>
                </div>
            </div>

            <a href="{{ route('contacto') }}"
                class="nav-item nav-link {{ request()->is('contacto') ? 'active' : '' }}">Contacto</a>
        </div>
        <a href="{{route('login')}}" class="btn btn-primary py-4 px-lg-5 d-block d-lg-block">CAMPUS<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
