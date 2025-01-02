<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a href="{{route('article.index')}}" aria-current="page" class="nav-link active">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
          </ul>
        </li>
        @endguest
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        @if(Auth::check() && Auth::user()->is_admin)
          <li>
            <a href="{{route('admin.dashboard')}}" class="dropdown-item">Dashboard Admin</a>
          </li>
        @endif
        @if(Auth::check() && Auth::user()->is_revisor)
          <li>
            <a href="{{route('revisor.dashboard')}}" class="dropdown-item">Dashboard Revisor</a>
          </li>
        @endif
        @if(Auth::check() && Auth::user()->is_writer)
          <li><a href="{{route('writer.dashboard')}}" class="dropdown-item">Dashboard Writer</a></li>
        @endif
      </ul>
      <form action="{{route('article.search')}}" method="GET" class="d-flex" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Cerca gli articoli..." aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>