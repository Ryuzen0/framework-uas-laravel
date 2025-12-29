<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar navbar-expand-lg shadow-lg" data-bs-theme="dark">
    <div class="container-fluid container-lg my-1">
        <a class="navbar-brand fs-2" href="/home">TULIP</a>

        {{-- USER LOGIN --}}
        @auth
            <p class="mb-0 me-3" style="color: #d4af37">
                Hallo, {{ auth()->user()->name }}
            </p>
        @endauth
        {{-- END USER LOGIN --}}

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- User belum login --}}
                    @guest
                        <a href="{{ route('login') }}" class="nav-link fs-4">
                            Login
                        </a>
                    @endguest
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fs-4" href="/menu">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fs-4" href="/reserve">Reserve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="/about">About Us</a>
                </li>

                {{-- LOGOUT --}}
                @auth
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <a class="nav-link fs-4" href="#" onclick="this.closest('form').submit(); return false;">
                                Logout
                            </a>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
{{-- End Navbar --}}
