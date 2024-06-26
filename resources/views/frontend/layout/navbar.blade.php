<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}"
                class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

            <a href="{{ route('doctor') }}"
                class="nav-item nav-link {{ request()->routeIs('doctor') ? 'active' : '' }}">Our Doctor</a>

            <a href="{{ route('service') }}"
                class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Service</a>

            <a href="about.html" class="nav-item nav-link">About</a>

            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
