<div class="container fixed-top font-primary text-uppercase navbar-expand-lg">
    <div class="row justify-content-center align-items-center">
        <div class="nav-custom col-md-8">
        </div>
        <div class="col-12 col-md-8 position-absolute2">
            <div class="d-flex justify-content-evenly h-100 nav-color collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="d-flex py-3 px-0 my-0 justify-content-evenly align-items-center w-100">
                    <li class="">
                        <a class="active" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                    </li>
                    <li class="">
                        <a class="active" aria-current="page" href="{{ route('announcements.index') }}">Annunci</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu bg-grey">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- drop down utente --}}
                    @guest
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Zona Utente
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                
                            </ul>
                        </li>
                    @endguest
                    @auth
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ciao, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu bg-grey">
                                <li class=""><a class=" dropdown-item" href="#">Profilo</a></li>
                                <li><a class="dropdown-item" href="{{ route('announcements.create') }}">Inserisci un
                                        annuncio</a>
                                </li>
                                @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item" href="{{route('revisor.index')}}">Zona Revisore
                                <span class="position-absolute top-0 start-100">
                                    {{-- {{App\Models\Announcement::toBeRevisionedCount()}} --}}
                                    <span class="visually-hidden ">
                                        UnreadMessage

                                    </span>

                                </span>
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
    </div>
</div>
