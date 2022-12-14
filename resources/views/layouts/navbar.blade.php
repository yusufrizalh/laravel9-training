<nav class="navbar fixed-top navbar-expand-lg navbar-light border-bottom" style="background-color: #e3f2fd">
    <div class="container">
        <a class="navbar-brand" href="https://www.inixindo.id">
            <img src="https://i.ibb.co/4W5dH5L/Logo-X-Transparent.png" alt="" width="24" height="24"
                class="d-inline-block align-text-top">
            Laravel Inixindo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($navigations as $nav => $url)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $url }}">{{ $nav }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->email }}
                        </a>
                        <ul class="dropdown-menu dropdown-end">
                            <li><a class="dropdown-item" href="{{ route('employees.datatables') }}">Datatables</a></li>
                            <li><a class="dropdown-item" href="/userschart">Highcharts</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-md dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
