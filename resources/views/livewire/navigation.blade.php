<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>ISSP</h2>
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
                    <a href="team.html" class="dropdown-item">Comercialización</a>
                    <a href="testimonial.html" class="dropdown-item">Robótica</a>
                    <a href="{{ route('pages.carreras.sistemas') }}"
                        class="dropdown-item {{ request()->is('carreras/sistemas') ? 'active' : '' }}">Sistemas</a>
                </div>
            </div>

            <a href="{{ route('contacto') }}"
                class="nav-item nav-link {{ request()->is('contacto') ? 'active' : '' }}">Contacto</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">CAMPUS<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
