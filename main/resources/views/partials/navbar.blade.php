<nav class="navbar navbar-expand-lg bg-light shadow sticky-top flex-md-nowrap mb-3">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo-kueku.png" alt="Logo" class="my-0" width="110">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @if (request()->is('/'))
                <ul class="navbar-nav mx-auto fw-bold">
                    <div class="input-group">
                        <input type="search" class="form-control-secondary rounded" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-secondary">search</button>
                    </div>
                </ul>
            @else
                <ul class="navbar-nav mx-auto fw-bold">
                </ul>
            @endif
            @auth
                @php $total_barang = 0; @endphp
                <ul class="navbar-nav dropdown ml-auto fw-bold">
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            @php $total_barang += $details['jumlah']; @endphp
                        @endforeach
                    @endif

                    <li class="nav-item px-2 {{ $title === 'cart' ? 'active' : '' }}">
                        <a class="nav-link" href="/cart"><i class="bi bi-cart-check"></i> Cart
                            ({{ $total_barang }})
                        </a>
                    </li>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-fill"></i> {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/account"><i class="bi bi-person-fill"></i> My Account</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="/logout" method="post">
                            @csrf
                            <li><button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-in-left"></i>
                                    Logout</button></li>
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
