<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="{{asset('tlandingPage/assets/img/logo-nav.svg')}}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/cari-kos') }}">Kos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/'.'#about') }}">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/'.'#team') }}">Tim</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/'.'#contact') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>