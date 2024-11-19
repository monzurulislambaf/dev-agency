<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ url("") }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">PROJUKTI PRANGON</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url("") }}" class="active">Home</a></li>
                <li><a href="{{ url("services") }}">Services</a></li>
                <li><a href="{{ url("about") }}">About</a></li>
                <li><a href="{{ url("contact") }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{ url("services") }}">Get Started</a>

    </div>
</header>
