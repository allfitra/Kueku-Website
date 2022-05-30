<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-4 shadow-lg p-3 bg-body rounded">
    <div class="position-sticky pt-3" style="">
        <ul class="nav flex-column">
            <li class="nav-item mt-5">
                <a class="nav-link {{ request()->is('seller*') ? 'active' : '' }}" href="/seller">
                    <i class="bi bi-bag-plus-fill"></i>&nbsp;
                    Produk Saya
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ request()->is('resend_verify_message') ? 'active' : '' }}">
                    <i class="bi bi-box-seam"></i>&nbsp;
                    Pesanan
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Menu</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn shadow-none nav-link" type="submit"><i class="bi bi-box-arrow-in-left"></i>
                        Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
