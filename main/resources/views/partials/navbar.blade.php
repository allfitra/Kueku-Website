<nav class="navbar navbar-expand-lg bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/logo-kueku.png" alt="Logo" class="my-0" width="110">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto fw-bold">
                <li class="nav-item px-2 {{ $title === 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item px-2 {{ $title === 'order' ? 'active' : '' }}">
                    <a class="nav-link" href="/order">ORDER</a>
                </li>
                <li class="nav-item px-2 {{ $title === 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="/about">ABOUT US</a>
                </li>
            </ul>

            @auth
            <ul class="navbar-nav dropdown ml-auto fw-bold">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i> {{ auth()->user()->name }}
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/#"><i class="bi bi-person-fill"></i> My Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="post">
                    @csrf
                    <li><button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-in-left"></i> Logout</button></li>
                    </form>
                </ul>
            </ul>
            @else
            <ul class="navbar-nav ml-auto fw-bold">
                <li class="nav-item px-2 {{ $title === 'login' ? 'active' : '' }}">
                    <a class="nav-link" href="/login">LOGIN</a>
                </li>
                <li class="nav-item px-2 {{ $title === 'register' ? 'active' : '' }}">
                    <a class="nav-link" href="/register">SIGN UP</a>
                </li>
            </ul>
            @endauth

        </div>
    </div>
</nav>
