<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage')}}">MusicLife</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route ('artist.index') }}">Artists List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('artist.create')}}">Add your fav Artist</a>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Album
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route ('album.create') }}">Add your fav Album</a></li>
                <li>
                </ul>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register')}}">Create Account</a>
          </li>
        
         </ul>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- come campo del tag ancor metto la direttiva @auth col messaggio da mostrare la funzione auth user ci dirà mostra il nome se l'utente è loggato --}}
            @auth
            Welcome {{ Auth::user()->name}}
            @else 
            Log-in/Register
        @endauth
          </a>
          <ul class="dropdown-menu">
            {{-- con @auth gli sto dicendo se l'utente è autenticato allora nel dropdown mostra ''Profile Picture e Log out options --}}
            @auth
            <li><a class="dropdown-item" href="#">Profile picture</a></li>
            <li>
              {{-- la rotta logout è tra le dichirate di fortify e semplicemente invia dei dati avendo method post quindi non dobbiamo dichiararla in web.php lo fa fortify --}}
                 <form method="POST" action="{{ route('logout') }}" >
                   @csrf
                     <button class="btn dropdown-item" type="submit">Logout
                     </button>
                 </form>
            </li>
            {{-- altrimenti mostra login e registrati @else --}}
            @else
            <li><a class="dropdown-item" href="{{route ('login') }}">Login</a></li>
            <hr>
            <a class="dropdown-item" href="{{ route ('register') }}">
             <li>Sign-in</li>
            </a>
        @endauth
        
        </li>
        </ul>
      </div>
      </div>
    </div>
  </nav>