<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top shadow">
    <div class="container">
        <a class="navbar-brand text-decoration-none" href="#">
            <img src="/img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top me-2">
            <b>ID Sehat</b>
        </a>
        <button class="navbar-toggler border-0 my-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto text-center">
                <a class="nav-link m-2" href="/">Beranda</a>
                <a class="nav-link m-2" href="/organ-manusia">Organ Manusia</a>
                <a class="nav-link m-2" href="/kasus-penyakit-di-indonesia">Kasus</a>
                <a class="nav-link m-2" href="/forum">Forum</a>
                <hr class="dropdown-divider">
                @auth
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle mx-2" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person" style="font-size: 1.5rem;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                            @if (auth()->user()->is_admin)
                                <li>
                                    <a href="/dashboard" class="nav-link text-center">{{ auth()->user()->name }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="#" class="nav-link text-center">{{ auth()->user()->name }}</a>
                                </li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-center"
                                        onmouseover="this.style.color='#ff5555';" onmouseout="this.style.color='#000';"
                                        style="background: unset;"><i class="bi bi-box-arrow-left me-2"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="nav-link m-2" href="/login" onmouseover="this.style.color='#ff5555';"
                        onmouseout="this.style.color='#000';" style="color: #000;"><i
                            class="bi bi-box-arrow-in-right me-2"></i>Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
