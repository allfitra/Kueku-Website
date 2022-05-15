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
            <ul class="navbar-nav ml-auto fw-bold">
                <li class="nav-item px-2 {{ $title === 'login' ? 'active' : '' }}">
                    <a class="nav-link" href="/login">LOGIN</a>
                </li>
                <li class="nav-item px-2 {{ $title === 'signup' ? 'active' : '' }}">
                    <a class="nav-link" href="/signup">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
