<nav class="nav-c fixed-top navbar font-primary text-uppercase navbar-expand-lg bg-grey" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="bi bi-list fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item text-white"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                {{-- drop down utente --}}
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Zona Utente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                            @if (Auth::user()->is_revisor)
                                <span class=" top-0 start-100 translate-middle badge rounded-pill bg-danger ms-1">
                                    {{ App\Models\Announcement::toBeRevisionedCount() }}
                                    <span class="visually-hidden">
                                        UnreadMessage
                                    </span>
                                </span>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profilo</a></li>
                            <li><a class="dropdown-item" href="{{ route('announcements.create') }}">Inserisci un
                                    annuncio</a>
                            </li>
                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item " href="{{ route('revisor.index') }}">Zona Revisore

                                    </a>
                                </li>
                            @endif
                            <li>
                                <hr class="dropdown-divider bg-champagnePink">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('homepage') }}"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
