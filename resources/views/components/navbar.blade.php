<nav class="nav-c fixed-top navbar font-primary text-uppercase navbar-expand-lg bg-grey" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="bi bi-list fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav translate-nav me-auto mb-2 mb-lg-0 w-100 justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('announcements.index') }}">{{ __('ui.announcement') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('categoryAll') }}">
                        {{ __('ui.category') }}
                    </a>
                    {{-- <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                        href="{{ route('categoryShow', compact('category')) }}">{{ __('ui.' . $category->name) }}</a>
                    </li>
                    @endforeach
                </ul> --}}
                </li>
                {{-- drop down utente --}}
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.userZone') }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.registration') }}</a>
                            </li>
                            {{-- <li>
                    <hr class="dropdown-divider">
                </li> --}}
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('ui.hi') }}, {{ Auth::user()->name }}
                            @if (Auth::user()->is_revisor)
                                @if (App\Models\Announcement::toBeRevisionedCount() == 0)
                                    <span class=" top-0 start-100 translate-middle badge rounded-pill bg-success ms-1">
                                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">
                                            UnreadMessage
                                        </span>
                                    </span>
                                @else
                                    <span class=" top-0 start-100 translate-middle badge rounded-pill bg-danger ms-1">
                                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">
                                            UnreadMessage
                                        </span>
                                    </span>
                                @endif
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            {{-- <li><a class="dropdown-item" href="#">{{ __('ui.profilo') }}</a></li> --}}
                            <li><a class="dropdown-item"
                                    href="{{ route('announcements.create') }}">{{ __('ui.newAnnouncement') }}
                                </a>
                            </li>
                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item "
                                        href="{{ route('revisor.index') }}">{{ __('ui.revisorZone') }}

                                    </a>
                                </li>
                            @endif
                            <li>
                                <hr class="dropdown-divider bg-champagnePink">
                            </li>
                            <li><a class="dropdown-item " href="{{ route('user.profile') }}">Profilo di {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('homepage') }}"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover-none" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-binoculars"></i>
                    </a>
                    <ul class="dropdown-menu nav-search">
                        <li><a class="dropdown-item hover-none" href="#">
                                <form action="{{ route('announcements.search') }}" class="row" role="search"
                                    method="GET">
                                    <div class="input-group">
                                        <input
                                            class="form-control input-group-text text-start bg-champagnePink color-grey shadow-input"
                                            type="search" placeholder="{{ __('ui.search') }}" aria-label="Search"
                                            name="searched">
                                        <span class="input-group-text bg-grey" id="basic-addon1">
                                            <button class="btn text-center pb-0" type="submit">
                                                <i class="bi bi-send color-champagnePink"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </a></li>
                    </ul>
                </li>
            </ul>
            <div>
                <ul class="d-flex align-items-center m-0 p-0">
                    <li class="nav-item">
                        <x-_locale lang="it" />
                    </li>
                    <li class="nav-item">
                        <x-_locale lang="en" />
                    </li>
                    <li class="nav-item">
                        <x-_locale lang="es" />
                    </li>
                </ul>
                {{-- ???????????   TERZA LINGUA?????????????????   --}}
            </div>
        </div>
    </div>
</nav>
