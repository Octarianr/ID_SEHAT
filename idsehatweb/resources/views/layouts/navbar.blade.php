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
            <div class="navbar-nav ms-auto my-2 text-center">
                <a class="nav-link mx-2" href="/">Beranda</a>
                <a class="nav-link mx-2" href="/organ-manusia">Organ Manusia</a>
                <a class="nav-link mx-2" href="/kasus-penyakit-di-indonesia">Kasus</a>
                <a class="nav-link mx-2" href="/forum">Forum</a>
                @auth
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
                            <li>
                                <a href="/dashboard" class="nav-link text-center">Dashboard</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-center">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="nav-link mx-2" href="/login">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
