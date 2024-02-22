<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-basecolor px-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="" style="font-size: 30px; font-weight: 600;">E-Voting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav" style="font-weight: 600;">
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white active" href="/">Home</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/quick-count">Quick Count</a>
                    </li>
                    @can('admin')
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/admin">Admin</a>
                    </li>
                    @endcan
                    
                    <li class="nav-item mr-3">
                        <a class="nav-link text-white" href="/kandidat">Kandidat</a>
                    </li>
                    <li class="nav-item mr-3 mb-2">

                        @guest
                            <a href="/login-pemilih" class="btn btn-outline-light rounded-pill">Login sebagai Pemilih</a>
                        @endguest
                        <!-- hanya tampil ketika sudah login, dan button login pemilih hilang -->
                        @auth
                            <button class="btn btn-outline-light rounded-pill">{{ auth()->user()->username }}</button>

                            <form action="/logout" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-danger rounded-pill ">Logout</button> 
                            </form>

                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
